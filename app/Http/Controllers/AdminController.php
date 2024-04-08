<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        // Fetch all users ordered by creation date in descending order
        $users = User::latest()->get();
        
        // Check if there are more than one user
        if ($users->count() > 1) { 
            // Find the admin user, if exists
            $admin = $users->where('role', 'admin')->first();
            
            // If admin user exists, move it to the top
            if ($admin) {
                $users = $users->reject(function ($user) use ($admin) {
                    return $user->id === $admin->id;
                });
        
                $users->prepend($admin);
            }
        }
        
        return view('admin.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {

        $users = new User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->role = $request->input('role');
        $users->password = bcrypt($request->input('password'));

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $users->avatar = $avatarPath;
        }

        $users->save();

        return redirect()->route('users.index')->with('success', 'User has been created successfully');
    }

    public function show(string $id)
    {
        // Show individual users details if needed
    }

    public function edit(string $id)
    {
        // Return view for editing a specific users
    }

    public function update(Request $request, string $id)
    {

        $users = User::findOrFail($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->role = $request->input('role');

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $users->avatar = $avatarPath;
        }

        $users->save();

        return redirect()->route('users.index')->with('success', 'User has been updated successfully');
    }

    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
  
        if ($users->isAdmin()) {
            return redirect()->route('users.index')->with('success', 'ADMIN USER CANNOT BE DELETED!!');
        }
  
        $users->delete();
  
        return redirect()->route('users.index')->with('success', 'User has been deleted successfully');
    }
}
