<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Fungsi untuk mengambil data stok bahan kue
    public function getData()
    {
        $stok = [
            [
                'nama' => 'Tepung Terigu',
                'stok' => 50,
                'satuan' => 'kg'
            ],
            [
                'nama' => 'Gula Pasir',
                'stok' => 30,
                'satuan' => 'kg'
            ],
            [
                'nama' => 'Mentega',
                'stok' => 20,
                'satuan' => 'pack'
            ],
            [
                'nama' => 'Telur',
                'stok' => 200,
                'satuan' => 'butir'
            ],
            [
                'nama' => 'Coklat Bubuk',
                'stok' => 15,
                'satuan' => 'kg'
            ]
        ];

        return $stok;
    }

    // Fungsi untuk menampilkan ke view
    public function tampilkan()
    {
        $data = $this->getData();

        return view('produk_view', ['stok' => $data]);
    }
}