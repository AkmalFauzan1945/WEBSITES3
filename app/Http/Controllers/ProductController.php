<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $nama_produk = $request->input('nama_produk');
        $query = Product::query();
        if (!empty($nama_produk)) {$query->where('nama_produk','LIKE','%' . $nama_produk . '%');}
        $produk = $query->get();
        return view('product.index', compact('produk'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('product.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_produk' => 'required',
            'nama_produk' => 'required|max:50',
            'id_kategori' => 'required|exists:kategori,id',
            'harga' => 'required|numeric',
            'stok' => 'required|integer|min:0',
        ]);

        DB::table('produk')->insert([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'id_kategori' => $request->id_kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()
            ->route('product.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $kategori = Kategori::all();
        return view('product.edit', compact('product', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_produk' => 'required',
            'nama_produk' => 'required|max:50',
            'id_kategori' => 'required|exists:kategori,id',
            'harga' => 'required|numeric',
            'stok' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'id_kategori' => $request->id_kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()
            ->route('product.index')
            ->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()
            ->route('product.index')
            ->with('success', 'Produk berhasil dihapus!');
    }
}
