<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login', [
            'username' => ''
        ]);
    }
    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login');
        }

        // Ringkasan usaha
        $stats = [
            'produk' => 5,
            'pesanan' => 24,
            'penjualan' => 350000,
            'stok' => 85
        ];

        // Data seluruh produk
        $products = [
            [
                'nama' => 'Pudding Cokelat',
                'kategori' => 'Chocolate',
                'harga' => 7000,
                'stok' => 25
            ],
            [
                'nama' => 'Pudding Strawberry',
                'kategori' => 'Fruit',
                'harga' => 7000,
                'stok' => 18
            ],
            [
                'nama' => 'Pudding Regal',
                'kategori' => 'Special',
                'harga' => 8000,
                'stok' => 15
            ],
            [
                'nama' => 'Pudding Vanilla',
                'kategori' => 'Classic',
                'harga' => 7000,
                'stok' => 20
            ],
            [
                'nama' => 'Pudding Taro',
                'kategori' => 'Special',
                'harga' => 8000,
                'stok' => 12
            ]
        ];

        // Data pesanan
        $orders = [
            [
                'nomor' => 'ORD-001',
                'produk' => 'Pudding Cokelat',
                'status' => 'Selesai'
            ],
            [
                'nomor' => 'ORD-002',
                'produk' => 'Pudding Regal',
                'status' => 'Diproses'
            ],
            [
                'nomor' => 'ORD-003',
                'produk' => 'Pudding Strawberry',
                'status' => 'Selesai'
            ],
            [
                'nomor' => 'ORD-004',
                'produk' => 'Pudding Vanilla',
                'status' => 'Diproses'
            ],
            [
                'nomor' => 'ORD-005',
                'produk' => 'Pudding Taro',
                'status' => 'Selesai'
            ]
        ];

        // Rincian penjualan
        $salesDetails = [
            [
                'produk' => 'Pudding Cokelat',
                'total' => 100000
            ],
            [
                'produk' => 'Pudding Strawberry',
                'total' => 75000
            ],
            [
                'produk' => 'Pudding Regal',
                'total' => 85000
            ],
            [
                'produk' => 'Pudding Vanilla',
                'total' => 50000
            ],
            [
                'produk' => 'Pudding Taro',
                'total' => 40000
            ]
        ];

        // Data bahan baku
        $materials = [
            [
                'nama' => 'Susu UHT',
                'stok' => '10 liter'
            ],
            [
                'nama' => 'Gula Pasir',
                'stok' => '5 kg'
            ],
            [
                'nama' => 'Agar-agar',
                'stok' => '20 pcs'
            ],
            [
                'nama' => 'Cokelat Bubuk',
                'stok' => '3 kg'
            ],
            [
                'nama' => 'Vla',
                'stok' => '15 bungkus'
            ]
        ];

        // Produk terlaris
        $popularProducts = [
            'Pudding Cokelat',
            'Pudding Strawberry'
        ];

        return view('dashboard', compact(
            'username',
            'stats',
            'products',
            'orders',
            'salesDetails',
            'materials',
            'popularProducts'
        ));
    }

    // HALAMAN PENGELOLAAN
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login');
        }

        // Data produk
        $products = [
            [
                'nama' => 'Pudding Cokelat',
                'kategori' => 'Chocolate',
                'harga' => 7000,
                'stok' => 25
            ],
            [
                'nama' => 'Pudding Strawberry',
                'kategori' => 'Fruit',
                'harga' => 7000,
                'stok' => 18
            ],
            [
                'nama' => 'Pudding Regal',
                'kategori' => 'Special',
                'harga' => 8000,
                'stok' => 15
            ],
            [
                'nama' => 'Pudding Vanilla',
                'kategori' => 'Classic',
                'harga' => 7000,
                'stok' => 20
            ],
            [
                'nama' => 'Pudding Taro',
                'kategori' => 'Special',
                'harga' => 8000,
                'stok' => 12
            ]
        ];

        // Data persediaan bahan baku
        $materials = [
            [
                'nama' => 'Susu UHT',
                'stok' => '10 liter'
            ],
            [
                'nama' => 'Gula Pasir',
                'stok' => '5 kg'
            ],
            [
                'nama' => 'Agar-agar',
                'stok' => '20 pcs'
            ],
            [
                'nama' => 'Cokelat Bubuk',
                'stok' => '3 kg'
            ],
            [
                'nama' => 'Vla',
                'stok' => '15 bungkus'
            ]
        ];

        return view('pengelolaan', compact(
            'username',
            'products',
            'materials'
        ));
    }

    // HALAMAN PROFILE
    public function profile(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login');
        }

        $profile = [
            'brand' => 'RabyPudding',
            'jabatan' => 'Owner',
            'email' => 'owner@rabypudding.com',
            'usaha' => 'Dessert & Pudding'
        ];

        return view('profile', compact(
            'username',
            'profile'
        ));
    }
}
