<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Roles::get();
        return view('roles.index', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'notes' => 'required|max:255|string',
            'is_active' => 'sometimes',

        ]);

        Roles::create([
            'name' => $request->name,
            'notes' => $request->notes,
            'is_active' => $request->is_active == true ? 1:0,

        ]);

        return redirect('roles')->with('status', 'Roles Created');

    }

    public function show($id)
    {
        $roles = Roles::find($id);

        return response()->json($roles);
    }

    public function update(Roles $roles, Request $request)
    {


       $data = $request->validate([
            'name' => 'required|max:255|string',
            'notes' => 'required|max:255|string',
            'is_active' => 'sometimes',
        ]);

        $roles->update( $data );

        return redirect('roles')->with('status', 'Roles Updated');
    }

}
