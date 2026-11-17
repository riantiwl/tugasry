<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class KatalogController extends Controller
{
    private function produk(): array
    {
        return [
            ['id' => 1, 'nama' => 'Kopi Ende', 'kategori' => 'Minuman', 'harga' => 15000, 'stok' => 12],
            ['id' => 2, 'nama' => 'Roti Cokelat', 'kategori' => 'Makanan', 'harga' => 8000, 'stok' => 0],
            ['id' => 3, 'nama' => 'Teh Kotak', 'kategori' => 'Minuman', 'harga' => 5000, 'stok' => 20],
            ['id' => 4, 'nama' => 'Keripik Pisang', 'kategori' => 'Makanan', 'harga' => 10000, 'stok' => 5],
        ];
    }

    public function index(): View
    {
        $produk = $this->produk();
        return view('katalog.index', compact('produk'));
    }
}