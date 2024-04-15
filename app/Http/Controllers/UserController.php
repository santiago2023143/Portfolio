<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
      
        if(auth()->user()->role == 'Admin' || auth()->user()->role == 'spectator'){
            $users = User::get()->where('role', 'spectator');
            return view('user.index', compact('users'))->with('i');
        }
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
     if(auth()->user()->role == 'spectator'){
        abort(404);
     }else{
        return view('user.create'); 
     }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       user::create($request->all());
       return redirect()->route('users.index');  
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
    public function edit(User $user)
    {
        if(auth()->user()->role == 'spectator'){
            abort(404);
        }else{
            if($user->role == 'Admin'){
                abort(404);
            }         
            return view ('user.edit', compact('user'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        //
        $user->update($request->all()); 
        return redirect()->route('users.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse 
    {
        //
        if(auth()->user()->role == 'spectator'){
            abort(404);
        }else{
            if($user->role == 'Admin'){
                abort(404);
            }         
            $user->delete();
            return redirect()->route('users.index');  
        }
       
        
    }
}
