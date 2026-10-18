<?php

namespace Tests\Feature;

use Database\Seeders\AccessorySeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AccessoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_beranda_dan_daftar_produk_tampil(): void
    {
        $this->seed(AccessorySeeder::class);

        $this->get('/')->assertStatus(200)->assertSee("Kim'sCells", false);
        $this->get('/produk')->assertStatus(200)->assertSee('Charger GaN 33W Dua Port');
    }

    public function test_detail_produk_tampil(): void
    {
        $this->seed(AccessorySeeder::class);

        $this->get('/produk/1')->assertStatus(200)->assertSee('Casing Matte Sage Green');
    }
}
