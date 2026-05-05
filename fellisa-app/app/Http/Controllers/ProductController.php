<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Pastikan Model Product sudah dibuat
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Daftar Produk";

        // Cara 1: Menggunakan Eloquent ORM (Paling direkomendasikan di Laravel)
        $products = Product::all();

        // Cara 2: Menggunakan Query Builder (Sesuai foto baris 24)
        // $products = DB::table('products')->get();

        return view('produk.index', compact('title', 'products'));
    }
}