<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Exception;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $nama_kategori = $request->input('nama_kategori');

        $query = Kategori::query();

        if (!empty($nama_kategori)) {
            $query->where('nama_kategori','LIKE','%' . $nama_kategori . '%');}

        $kategori = $query->get();

        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:50',
        ]);

        try {
            Kategori::create([
                'nama_kategori' => $request->nama_kategori,
            ]);

            return redirect()
                ->route('kategori.index')
                ->with('success', 'Kategori berhasil disimpan!');

        } catch (Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('galat', 'Kategori gagal disimpan!');
        }
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);

        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:50',
        ]);

        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()
            ->route('kategori.index')
            ->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();

        return redirect()
            ->route('kategori.index')
            ->with('success', 'Kategori berhasil dihapus!');
    }
}
