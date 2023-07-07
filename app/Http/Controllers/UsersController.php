<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Users::all();
        return view('users.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Users::create([
            'users_nama' => $request->users_nama,
            'users_email' => $request->users_email,
            'users_pass' => $request->users_pass,
            'users_alamat' => $request->users_alamat
        ]);

        return redirect('users');
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
    public function edit($id)
    {
        $row = Users::findOrFail($id);
        return view('users.edit', compact('row'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'users_nama'=>'bail|required',
                'users_email'=>'required',
                'users_pass'=>'required',
                'users_alamat'=>'required'

            ],
            [
                'users_nama.required'=>'nama wajib diisi',
                'users_email.required'=>'email wajib diisi',
                'users_pass.required'=>'email wajib diisi',
                'users_alamat.required'=>'email wajib diisi'
            ]
            );

            $row = Users::findOrFail($id);
            $row->update([
                'users_nama'=>$request->users_nama,
                'users_email'=>$request->users_email,
                'users_pass'=>$request->users_pass,
                'users_alamat'=>$request->users_alamat
            ]);

            return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Users::findOrFail($id);
        $row->delete();

        return redirect('users');
    }
}
