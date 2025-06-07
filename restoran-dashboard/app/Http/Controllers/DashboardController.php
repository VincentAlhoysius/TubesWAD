<?php

namespace App\Http\Controllers;

use App\Models\Produk; // GANTI dari Menu ke Produk
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $produks = Produk::all();

        $total = Produk::count();

        $makanan = Produk::where('kategori', 'makanan')->count();

        $minuman = Produk::where('kategori', 'minuman')->count();

        $chartRaw = Produk::select('kategori')
            ->selectRaw('SUM(stok) as total_stok')
            ->groupBy('kategori')
            ->get();

        return view('dashboard.index', compact('produks','total', 'makanan', 'minuman', 'chartRaw'));
    }
}
