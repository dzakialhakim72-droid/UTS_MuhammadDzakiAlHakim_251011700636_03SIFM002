<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $table = 'accessories';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'type',
        'compatibility',
        'price',
        'image',
        'description',
    ];

    // Dipakai di view: {{ $accessory->price_rupiah }} => Rp 119.000
    public function getPriceRupiahAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}
