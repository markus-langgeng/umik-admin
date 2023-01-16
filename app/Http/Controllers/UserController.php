<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* === Returning Views === */
    public function index()
    {
        return view('main-content.dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }

    // Menampilkan semua user
    public function showUser()
    {
        return view('main-content.users.index', [
            'title' => 'Users',
        ]);
    }

    // Menampilkan semua umkm
    public function showUmkm()
    {
        return view('main-content.umkm.index', [
            'title' => 'UMKM',
        ]);
    }

    // Menampilkan semua laporan umkm
    public function showLaporan()
    {
        return view('main-content.laporan.index', [
            'title' => 'Data Laporan UMKM',
        ]);
    }

    public function login()
    {
        return view('main-content.login.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
