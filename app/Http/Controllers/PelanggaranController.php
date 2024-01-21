<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggaran;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pelanggaran::all();

        return '';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelanggaran = new Pelanggaran();
        $pelanggaran->id = $request->id;
        $pelanggaran->tanggal = $request->tanggal;
        $pelanggaran->jenis_pelanggaran = $request->jenis_pelanggaran;
        $pelanggaran->save();

        return '';
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updatePelanggaran = Pelanggaran::where('id',$id)
        ->update([
            "tanggal" => $request->tanggal,
            "jenis_pelanggaran" => $request->jenis_pelanggaran
        ]);

        return '';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Pelanggaran::where('id',$id)->delete();

        return '';
    }
}
