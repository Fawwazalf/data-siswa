<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:Super Admin');
    }

    public function index()
    {
        $roles = Role::with('permissions')->paginate(10);
        return view('roles.index',compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'permissions' => 'array',
            'permissions.*' => 'string|exists:permissions,name',
        ]);
        $role =  Role::create(['name' => $validated['name']]);
        $role->syncPermissions($validated['permissions']);
        return redirect()->route('roles.index')->with('message', 'Role created successfully.');
    }

    public function edit($id)
    {
        $role = Role::with('permissions')->findOrFail($id);
        $permissions = Permission::all();
        return view('roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $id,
            'permissions' => 'array',
            'permissions.*' => 'string|exists:permissions,name',
        ]);
        $role = Role::findOrFail($id);
        $role->name = $validated['name'];
        $role->save();
        if (isset($validated['permissions'])) {
            $role->syncPermissions($validated['permissions']);
        } else {
            $role->syncPermissions([]);
        }
        
        return redirect()->route( 'roles.index')->with('message', 'Role updated successfully.');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        if ($role->name == 'Super Admin') {
            return redirect()->route('roles.index')->with('error', 'Cannot delete Super Admin role.');
        } else {
            $role->delete();
        }
        return redirect()->route('roles.index')->with('message', 'Role deleted successfully.');
    }
}
