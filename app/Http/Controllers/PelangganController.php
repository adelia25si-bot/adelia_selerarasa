<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::latest()->get();

        return view('pelanggans.index', compact('pelanggans'));
    }

    public function create()
    {
        return view('pelanggans.create');
    }

    public function store(Request $request)
    {
         $request->validate([
        'nama_pelanggan' => 'required|string|max:255',
        'email' => 'nullable|email|max:255',
        'no_telepon' => 'nullable|string|max:20',
        'alamat' => 'nullable|string',
    ]);

    Pelanggan::create([
        'nama_pelanggan' => $request->nama_pelanggan,
        'email' => $request->email,
        'no_telepon' => $request->no_telepon,
        'alamat' => $request->alamat,
    ]);

    return redirect()
        ->route('pelanggans.index')
        ->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
           $pelanggan = Pelanggan::findOrFail($id);

            return view('pelanggans.edit', compact('pelanggan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
        'nama_pelanggan' => 'required|string|max:255',
        'email' => 'nullable|email|max:255',
        'no_telepon' => 'nullable|string|max:20',
        'alamat' => 'nullable|string',
    ]);

    $pelanggan = Pelanggan::findOrFail($id);

    $pelanggan->update([
        'nama_pelanggan' => $request->nama_pelanggan,
        'email' => $request->email,
        'no_telepon' => $request->no_telepon,
        'alamat' => $request->alamat,
    ]);

    return redirect()
        ->route('pelanggans.index')
        ->with('success', 'Pelanggan berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
         $pelanggan = Pelanggan::findOrFail($id);
    $pelanggan->delete();

    return redirect()
        ->route('pelanggans.index')
        ->with('success', 'Pelanggan berhasil dihapus!');
    }
}
