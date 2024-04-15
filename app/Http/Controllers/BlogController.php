<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blog = Blog::get();
        return view('blog.index', compact('blog'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate(
            [
                'blog_image' => 'required',
                'title' => 'required',
                'date' => 'required',
                'details' => 'required',
            ]
            );
           
       if($request->hasFile('blog_image')){
        $image = $request->file('blog_image');
        $imagePath = $image->store('image', 'public');
         $data['blog_image'] = $imagePath;
       }
      Blog::create($data);
      return redirect()->route('blog.index');
}
    

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        if(auth()->user()->role == 'Admin'){
            return view('blog.edit', compact('blog'));
            }else{
                abort(404);
            }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
        $blog->update($request->all());
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        if(auth()->user()->role == 'Admin'){
            $blog->delete();
            return redirect()->route('blog.index');  
        }else{
            abort(404);
        }
        $blog->delete();
        return redirect()->route('blog.index');     
    }
}
