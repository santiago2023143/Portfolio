<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience = Experience::get();
        return view('experience.index', compact('experience'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Experience::create($request->all());
        return redirect()->route('experience.index');  
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
    public function edit(Experience $experience)
    {
        if(auth()->user()->role == 'Admin'){
            return view ('experience.edit', compact('experience')); 
    
            }else{
                abort(404);
            }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $experience->update($request->all()); 
        return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        if(auth()->user()->role == 'Admin'){
            $experience->delete();
            return redirect()->route('experience.index');
        }else{
            abort(404);
        }
        
    }
}
