@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')

<div class="page-container">

    <div class="page-heading">

        <div>
            <p class="subtitle">Management Center</p>

            <h1>Pengelolaan Produk 🍮</h1>

            <p>Kelola produk dan persediaan RabyPudding.</p>
        </div>

    </div>


    <div class="content-card">

        <h2>Daftar Produk Pudding</h2>

        <p class="description">
            Informasi produk yang tersedia di RabyPudding.
        </p>


        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($products as $index => $product)

                    <tr>

                        <td>{{ $index + 1 }}</td>

                        <td>{{ $product['nama'] }}</td>

                        <td>{{ $product['kategori'] }}</td>

                        <td>
                            Rp{{ number_format($product['harga'], 0, ',', '.') }}
                        </td>

                        <td>
                            {{ $product['stok'] }} pcs
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>


    <div class="content-card">

        <h2>Persediaan Bahan Baku</h2>

        <p class="description">
            Informasi bahan yang digunakan untuk produksi pudding.
        </p>


        <div class="material-grid">

            @foreach($materials as $material)

                <div class="material-item">

                    <div class="material-icon">
                        🥛
                    </div>

                    <div>
                        <strong>{{ $material['nama'] }}</strong>

                        <p>
                            Stok: {{ $material['stok'] }}
                        </p>
                    </div>

                </div>

            @endforeach

        </div>

    </div>


    <a href="{{ route('dashboard', ['username' => $username]) }}"
       class="back-link">

        ← Kembali ke Dashboard

    </a>

</div>

@endsection