<?php

namespace App\Http\Controllers;

use App\Apirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.laporkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namalengkap' => 'required',
            'kelas' => 'required',
            'nomorhp' => 'required',
            'jeniskelamin' => 'required',
            'kategori' => 'required',
            'keluh' => 'required',
        ]);
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Apirasi  $apirasi
     * @return \Illuminate\Http\Response
     */
    public function show(Apirasi $apirasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apirasi  $apirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Apirasi $apirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apirasi  $apirasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apirasi $apirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apirasi  $apirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apirasi $apirasi)
    {
        //
    }
}
