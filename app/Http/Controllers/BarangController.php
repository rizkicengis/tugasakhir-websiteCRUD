<?php
namespace App\Http\Controllers;
use App\Models\section;

class BarangController extends Controller
{
    public function index()
    {
        // Mengambil data dari model Barang
        $barangs = section::all();
        
        // Mengirim data ke tampilan
        return view('depan', compact('barangs'));
    }
}
