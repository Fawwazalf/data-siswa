<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:Super Admin');
    }
    public function index(){
        $users = User::with('roles')->paginate(10);
        return view('users.index', compact('users'));
    }
    
    public function create(){
       $roles = Role::all();
        
        return view('users.create', compact('roles'));
    }

    public function store(){
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|string|exists:roles,name',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        $user->assignRole($validated['role']);

        return redirect('/users')->with('message', 'User berhasil ditambahkan.');
    }

    public function edit(string $id){
        $user = User::with('roles')->findOrFail($id);
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, string $id){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|string|exists:roles,name',
        ]);
        
        if ($request->filled('password')) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }
        
        $user = User::findOrFail($id);
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'] ?? $user->password,
        ]);
        $user->syncRoles($validated['role']);



        return redirect('/users')->with('message', 'User berhasil diupdate.');
    }
    public function destroy(string $id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users')->with('message', 'User berhasil dihapus.');
    }   
}
