<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    // Fungsi ini menangkap data $id dan $nama dari URL
    public function tampilkan($id, $nama) {
        // Mengirim data ke file view bernama 'list_barang'
        return view('list_barang', ['id' => $id, 'nama' => $nama]);
    }
}

