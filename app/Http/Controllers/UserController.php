<?php

namespace App\Http\Controllers;

use APP\Models\User;
use Illuminate\Http\Request;
use Hash;
use Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make ($request->password),
            'level'     => $request->level,
        ]);

        toast('Berhasil Menambahkan Data Pengguna Baru','success');
        return redirect()->route('user.index');
        // Alert::success('Sukses','Berhasil Menambahkan Data Pengguna Baru');
    }

    public function edit(User $user)
    {

        return view('user.edit', compact('user'));

    }

    public function update(Request $request, User $user)
    {

        $user->update([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => is_null($request->password) ? $user->password : Hash::make($request->password),
                'level'     => $request->level,
            ]);

            toast('Berhasil Menambahkan Data Pengguna Baru','success');
            return redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $user->destroy($user->id);

        toast('Berhasil Menghapus Data Pengguna','success');
        return redirect()->route('user.index');

    }
}
