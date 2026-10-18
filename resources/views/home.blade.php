@extends('layouts.app')

@section('title', "Beranda - Kim'sCells")

@section('content')
<section class="hero-kc py-5">
    <div class="container py-3">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <p class="text-uppercase small mb-2">Selamat datang di</p>
                <h1 class="display-4 fw-bold mb-3">Kim'sCells</h1>
                <p class="fs-5 mb-4">Toko aksesoris HP: casing, charger, kabel data, audio, dan perlengkapan lainnya.</p>
                <a href="{{ route('accessories.index') }}" class="btn btn-kc btn-lg">Lihat Semua Produk</a>
            </div>
            <div class="col-lg-5">
                <div class="hero-id">
                    <div class="fw-bold fs-5">Muhammad Dzaki Al Hakim</div>
                    <div>251011700636</div>
                    <div>humas@unpam.ac.id</div>
                    <div>Program Studi Sistem Informasi</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="h4 fw-bold mb-0">Produk Terbaru</h2>
        <a href="{{ route('accessories.index') }}" class="text-decoration-none">Lihat semua</a>
    </div>

    <div class="row g-4">
        @foreach ($latest as $accessory)
            <div class="col-6 col-md-3">
                @include('accessories.card', ['accessory' => $accessory])
            </div>
        @endforeach
    </div>
</section>
@endsection
