<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Roles::get();
        return view('roles.index', compact('roles'));
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

    public function edit(int $id)
    {
        $roles = roles::findOrFail($id);
        return view('roles.edit', ['roles' => $roles]);
    }

    public function update(Request $roles, Request $request)
    {

        $roles->validate([
            'name' => 'required|max:255|string',
            'notes' => 'required|max:255|string',
            'is_active' => 'sometimes',
        ]);

        $request->update->all();

        return redirect('roles')->with('status', 'Roles Updated');
    }

}
