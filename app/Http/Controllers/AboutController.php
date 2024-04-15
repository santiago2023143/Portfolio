<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $about = About::get();
        return view('about.index', compact('about'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        About::create($request->all());
        return redirect()->route('about.index');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        if(auth()->user()->role == 'Admin'){
            return view ('about.edit', compact('about'));
        }else{
            abort(404);
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, about $about)
    {
        $about->update($request->all()); 
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $about)
    {
        if(auth()->user()->role == 'Admin'){
        $about->delete();
        return redirect()->route('about.index');
        }else{
            abort(404);
        }
    }
}
