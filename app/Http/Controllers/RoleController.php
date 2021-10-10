<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoleRequest $request)
    {
        $request->user()->authroles('Rol Administrador');
        return Role::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $request->user()->authroles('Rol Administrador');
        Role::create($request->all());
        return response()->json([
            'Message' => 'The new role was successfully saved',
            'State' => 'true'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role, RoleRequest $request)
    {
        $request->user()->authroles('Rol Administrador');
        return response()->json([
            'Message'=> 'Showing the queried role',
            'Response' => $role
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->user()->authroles('Rol Administrador');
        $role->update($request->all());
        return response()->json([
            'Message'=> 'The role was updated',
            'Response' => $role
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role, RoleRequest $request)
    {
        $request->user()->authroles('Rol Administrador');
        $role->delete();
        return response()->json([
            'Message'=> 'The role was deleted',
            'Response' => $role
        ],200);
    }
}
