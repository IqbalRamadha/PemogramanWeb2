<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Kelurahan;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pasien = Pasien::all();
        return view('admin.pasien.index', compact('list_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasien  = Pasien::all();
        $kelurahans  = Pasien::all();
        return view('admin.pasien.create', compact('pasien','kelurahans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'kelurahan_id' => 'required|string',

        ]);

        Pasien::create($validated);
        return redirect('dashboard/pasien')->with('pesan', 'Data Berhasil di Tambahkan');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::find($id);
        $kelurahans = Kelurahan::all();
        return view('admin.pasien.edit', compact('pasien','kelurahans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'kelurahan_id' => 'required|string',
        ]);

        $pasien = Pasien::find($id);
        $pasien->update($validated);
        return redirect('dashboard/pasien')->with('tambah', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('dashboard/pasien')->with('hapus', 'Data Berhasil di Hapus');
    }
}
