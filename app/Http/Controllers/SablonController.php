<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SablonController extends Controller
{
    public function index()
    {
        // Data produk yang biasanya ada di database, kita tulis di sini
        $products = [
            [
                'id' => 1,
                'name' => 'Ultra Soft Combed 30s',
                'price' => 55000,
                'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=800',
                'desc' => 'Standar distro dengan bahan katun murni.'
            ],
            [
                'id' => 2,
                'name' => 'Oversize Heavy Weight',
                'price' => 85000,
                'image' => 'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?q=80&w=800',
                'desc' => 'Potongan boxy fit yang kekinian dan tebal.'
            ],
            [
                'id' => 3,
                'name' => 'Premium French Terry Hoodie',
                'price' => 150000,
                'image' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?q=80&w=800',
                'desc' => 'Bahan lembut dan hangat, cocok untuk sablon grafis besar.'
            ]
        ];

        return view('sablon-home', compact('products'));
    }
}