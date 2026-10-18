@extends('layouts.app')

@section('title', "Produk - Kim'sCells")

@section('content')
<div class="container py-4">
    <h1 class="h3 fw-bold mb-3">Daftar Produk</h1>

    <div class="mb-4">
        <a href="{{ route('accessories.index') }}"
            class="btn btn-sm {{ $selectedType ? 'btn-outline-dark' : 'btn-dark' }}">Semua</a>
        @foreach ($types as $type)
            <a href="{{ route('accessories.index', ['type' => $type]) }}"
                class="btn btn-sm {{ $selectedType === $type ? 'btn-dark' : 'btn-outline-dark' }}">{{ $type }}</a>
        @endforeach
    </div>

    <div class="row g-4">
        @forelse ($accessories as $accessory)
            <div class="col-6 col-md-4 col-lg-3">
                @include('accessories.card', ['accessory' => $accessory])
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning">Belum ada produk. Jalankan <code>php artisan migrate:fresh --seed</code>.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection
