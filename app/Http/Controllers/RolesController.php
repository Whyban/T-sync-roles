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
            'created_at' => 'timestamp'
        ]);

        Roles::create([
            'name' => $request->name,
            'notes' => $request->notes,
            'is_active' => $request->is_active == true ? 1:0,
            'created_at' => $request->created_at
        ]);

        return redirect('roles')->with('status', 'Roles Created');

    }

    public function edit(int $id)
    {
        $roles = roles::findOrFail($id);
        return view('roles.edit', compact('roles'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'notes' => 'required|max:255|string',
            'is_active' => 'sometimes',
            'created_at' => 'timestamp'
        ]);

        Roles::update([
            'name' => $request->name,
            'notes' => $request->notes,
            'is_active' => $request->is_active == true ? 1:0,
            'created_at' => $request->created_at
        ]);

        return redirect('roles')->with('status', 'Roles Updated');
    }

}
