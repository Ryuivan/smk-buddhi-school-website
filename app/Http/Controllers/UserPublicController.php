<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;



class UserPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        if (!Gate::allows('edit-user', $user)) {
            abort(403);
        }
        return view('users.edit', [
            'title' => 'Edit Account',
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Gate::allows('edit-user', User::findOrFail($id))) {
            abort(403);
        }

        $rules = [
            'name' => 'required|string|max:255',
        ];

        if ($request->email != User::findOrFail($id)->email) {
            $rules['email'] = 'required|string|email|unique:users';
        }

        $validatedData = $request->validate($rules);

        User::findOrFail($id)->update($validatedData);
        return redirect('/')->with('success', 'Account updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort(404);
    }
}
