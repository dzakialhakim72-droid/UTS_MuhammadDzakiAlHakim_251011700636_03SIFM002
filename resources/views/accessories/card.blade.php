<div class="card h-100 border-0 shadow-sm">
    <img src="{{ asset('assets/images/' . $accessory->image) }}" class="card-img-top" alt="{{ $accessory->name }}">
    <div class="card-body">
        <span class="badge text-bg-secondary mb-2">{{ $accessory->type }}</span>
        <h5 class="card-title fs-6">{{ $accessory->name }}</h5>
        <p class="harga mb-0">{{ $accessory->price_rupiah }}</p>
    </div>
    <div class="card-footer bg-white border-0 pb-3">
        <a href="{{ route('accessories.show', $accessory->id) }}" class="btn btn-kc btn-sm w-100">Lihat Detail</a>
    </div>
</div>
