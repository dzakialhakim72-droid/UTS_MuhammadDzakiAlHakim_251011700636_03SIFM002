@extends('layouts.app')

@section('title', $accessory->name . " - Kim'sCells")

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('accessories.index') }}">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $accessory->name }}</li>
        </ol>
    </nav>

    <div class="card border-0 shadow-sm">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ asset('assets/images/' . $accessory->image) }}" class="img-fluid w-100 rounded-start"
                    alt="{{ $accessory->name }}">
            </div>
            <div class="col-md-7">
                <div class="card-body p-4">
                    <span class="badge text-bg-secondary mb-2">{{ $accessory->type }}</span>
                    <h1 class="h3 fw-bold">{{ $accessory->name }}</h1>
                    <p class="harga fs-4">{{ $accessory->price_rupiah }}</p>

                    <table class="table table-borderless mb-3">
                        <tr>
                            <th class="w-25">Jenis</th>
                            <td>{{ $accessory->type }}</td>
                        </tr>
                        <tr>
                            <th>Kompatibilitas</th>
                            <td>{{ $accessory->compatibility }}</td>
                        </tr>
                    </table>

                    <p>{{ $accessory->description }}</p>

                    <a href="{{ route('accessories.index') }}" class="btn btn-outline-dark">&larr; Kembali ke Produk</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
