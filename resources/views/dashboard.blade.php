
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="page-container">

    <div class="welcome-section">
        <div>
            <p class="subtitle">Dashboard Overview</p>
            <h1>Halo, {{ $username }}! 🐰</h1>
            <p>Selamat datang kembali di RabyPudding.</p>
        </div>

        <div class="welcome-icon">
            🍮
        </div>
    </div>

    <h2 class="section-title">Lihat laporan Rabypudding hari ini!</h2>

    <div class="stats-grid">
<div class="rabbit-photo-section">
    <img
        src="{{ asset('images/pudingkelinci.jpg') }}"
        alt="Puding kelinci RabyPudding"
        class="rabbit-pudding-photo"
    >
</div>
        <!-- TOTAL PRODUK -->
        <details class="stat-detail">
            <summary class="stat-card">
                <span>🍮</span>
                <p>Total Produk</p>
                <h2>{{ $stats['produk'] }}</h2>
            </summary>

            <div class="stat-detail-content">
                <h3>Rincian Produk</h3>
                <p>Daftar produk pudding yang tersedia.</p>

                @foreach($products as $product)
                    <div class="detail-row">
                        <span>{{ $product['nama'] }}</span>
                        <strong>{{ $product['stok'] }} stok</strong>
                    </div>
                @endforeach
            </div>
        </details>

        <!-- TOTAL PESANAN -->
        <details class="stat-detail">
            <summary class="stat-card">
                <span>📦</span>
                <p>Total Pesanan</p>
                <h2>{{ $stats['pesanan'] }}</h2>
            </summary>

            <div class="stat-detail-content">
                <h3>Rincian Pesanan</h3>
                <p>Beberapa pesanan terbaru pelanggan.</p>

                @foreach($orders as $order)
                    <div class="detail-row">
                        <div>
                            <strong>{{ $order['nomor'] }}</strong>
                            <p>{{ $order['produk'] }}</p>
                        </div>

                        <span class="detail-status">
                            {{ $order['status'] }}
                        </span>
                    </div>
                @endforeach
            </div>
        </details>

        <!-- TOTAL PENJUALAN -->
        <details class="stat-detail">
            <summary class="stat-card">
                <span>💰</span>
                <p>Total Penjualan</p>
                <h2>Rp{{ number_format($stats['penjualan'], 0, ',', '.') }}</h2>
            </summary>

            <div class="stat-detail-content">
                <h3>Rincian Penjualan</h3>
                <p>Penjualan berdasarkan produk.</p>

                @foreach($salesDetails as $sale)
                    <div class="detail-row">
                        <span>{{ $sale['produk'] }}</span>
                        <strong>
                            Rp{{ number_format($sale['total'], 0, ',', '.') }}
                        </strong>
                    </div>
                @endforeach

                <div class="detail-total">
                    <span>Total Penjualan</span>
                    <strong>
                        Rp{{ number_format($stats['penjualan'], 0, ',', '.') }}
                    </strong>
                </div>
            </div>
        </details>

<!-- STOK BAHAN -->
<details class="stat-detail">
    <summary class="stat-card">
        <span>🥛</span>
        <p>Stok Bahan</p>
        <h2>{{ $stats['stok'] }}</h2>
    </summary>

    <div class="stat-detail-content">
        <h3>Rincian Stok Bahan</h3>
        <p>Persediaan bahan baku pudding saat ini.</p>

        @foreach($materials as $material)
            <div class="detail-row">
                <span>{{ $material['nama'] }}</span>
                <strong>{{ $material['stok'] }}</strong>
            </div>
        @endforeach
    </div>
</details>
</div>

    <div class="content-card">

    {{-- PRODUK TERLARIS --}}
    <div class="content-card">

        <h2>Produk Terlaris</h2>

        <p class="description">
            Berikut beberapa pudding yang paling diminati.
        </p>

        <div class="popular-list">

            @foreach($popularProducts as $product)

                <div class="popular-item">
                    <span>🍮</span>
                    <strong>{{ $product }}</strong>
                    <span class="status-label">Best Seller</span>
                </div>

            @endforeach

        </div>

    </div>

    <div class="quick-action">

        <div>
            <h2>Kelola Usahamu</h2>
            <p>
                Lihat produk dan persediaan bahan baku.
            </p>
        </div>

        <a href="{{ route('pengelolaan', ['username' => $username]) }}"
           class="btn-primary">
            Lihat Pengelolaan →
        </a>

    </div>

</div>

@endsection