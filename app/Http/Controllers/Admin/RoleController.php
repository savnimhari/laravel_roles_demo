<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Retrieve all roles with their associated permissions
        $roles = Role::with('permissions')->get();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // Retrieve all available permissions to be assigned to a new role
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);

        try {
            // Start a database transaction
            DB::beginTransaction();

            // Create the new role
            $role = Role::create(['name' => $request->name]);

            // Sync the selected permissions to the role
            if ($request->has('permissions')) {
                $role->syncPermissions($request->permissions);
            }

            // Commit the transaction
            DB::commit();

            return redirect()->route('admin.roles.index')
                             ->with('success', 'Role created successfully.');
        } catch (\Exception $e) {
            // Rollback the transaction on error
            DB::rollBack();
            return redirect()->back()
                             ->with('error', 'Failed to create role: ' . $e->getMessage())
                             ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        // Retrieve all available permissions
        $permissions = Permission::all();
        // Get the permissions currently assigned to the role
        $rolePermissions = $role->permissions->pluck('id')->toArray();

        return view('admin.roles.edit', compact('role', 'permissions', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id, // Exclude current role's ID
            // 'permissions' => 'nullable|array',
            // 'permissions.*' => 'exists:permissions,id', // Ensure selected permissions exist
        ]);

        try {
            // Start a database transaction
            DB::beginTransaction();

            // Update the role's name
            $role->update(['name' => $request->name]);

            // Sync the selected permissions to the role
            // If no permissions are selected, all existing permissions will be revoked.
            $role->syncPermissions($request->permissions ?? []);

            // Commit the transaction
            DB::commit();

            return redirect()->route('admin.roles.index')
                             ->with('success', 'Role updated successfully.');
        } catch (\Exception $e) {
            // Rollback the transaction on error
            DB::rollBack();
            return redirect()->back()
                             ->with('error', 'Failed to update role: ' . $e->getMessage())
                             ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        try {
            // Delete the role
            $role->delete();
            return redirect()->route('admin.roles.index')
                             ->with('success', 'Role deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                             ->with('error', 'Failed to delete role: ' . $e->getMessage());
        }
    }
}
