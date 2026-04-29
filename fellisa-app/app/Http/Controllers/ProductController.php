<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Daftar Produk";
        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 7500000],
            ['id' => 2, 'name' => 'Mouse', 'price' => 150000],
            ['id' => 3, 'name' => 'Keyboard', 'price' => 300000],
            ['id' => 4, 'name' => 'Monitor', 'price' => 2500000],
        ];

        return view('produk.index', compact('title', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }
}