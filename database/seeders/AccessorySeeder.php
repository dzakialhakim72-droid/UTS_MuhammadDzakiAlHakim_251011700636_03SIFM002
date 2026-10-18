<?php

namespace Database\Seeders;

use App\Models\Accessory;
use Illuminate\Database\Seeder;

class AccessorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accessories = [
            [
                'name' => 'Casing Matte Sage Green',
                'type' => 'Casing',
                'compatibility' => 'Redmi Note 13',
                'price' => 32000,
                'image' => 'casing-matte-sage.jpg',
                'description' => 'Casing silikon lentur dengan permukaan doff yang tidak mudah berminyak. Tepi di sekitar kamera dibuat sedikit lebih tinggi supaya lensa tidak langsung menyentuh meja.',
            ],
            [
                'name' => 'Casing Carbon Armor Hitam',
                'type' => 'Casing',
                'compatibility' => 'Infinix Hot 40',
                'price' => 38000,
                'image' => 'casing-carbon-armor.jpg',
                'description' => 'Casing dengan motif serat karbon di bagian belakang dan sudut yang diperkuat. Tombol volume dan power tetap mudah ditekan.',
            ],
            [
                'name' => 'Charger GaN 33W Dua Port',
                'type' => 'Charger',
                'compatibility' => 'Universal (USB-C PD dan USB-A)',
                'price' => 119000,
                'image' => 'charger-gan-33w.jpg',
                'description' => 'Charger ukuran ringkas dengan satu port USB-C dan satu port USB-A. Mudah dibawa bepergian karena bodinya kecil.',
            ],
            [
                'name' => 'Charger Mobil Dual USB 24W',
                'type' => 'Charger',
                'compatibility' => 'Universal (USB-A)',
                'price' => 45000,
                'image' => 'charger-mobil-dual.jpg',
                'description' => 'Charger untuk lighter mobil dengan dua port USB-A. Bisa mengisi daya dua HP sekaligus selama perjalanan.',
            ],
            [
                'name' => 'Kabel Data Nilon Anyam 1,5 m',
                'type' => 'Kabel Data',
                'compatibility' => 'USB-C ke USB-C',
                'price' => 39000,
                'image' => 'kabel-nilon-anyam.jpg',
                'description' => 'Kabel dengan lapisan nilon anyam di bagian luar sehingga lebih tahan tertekuk. Panjang 1,5 meter, cukup untuk mengisi daya sambil HP dipakai.',
            ],
            [
                'name' => 'Kabel Magnetik 3 in 1',
                'type' => 'Kabel Data',
                'compatibility' => 'Micro-USB, Lightning, USB-C',
                'price' => 55000,
                'image' => 'kabel-magnetik-3in1.jpg',
                'description' => 'Satu kabel dengan tiga ujung konektor magnetik yang bisa diganti sesuai kebutuhan. Praktis untuk yang sering berganti HP.',
            ],
            [
                'name' => 'Earphone Kabel Bass Clear',
                'type' => 'Audio',
                'compatibility' => 'Semua HP dengan jack 3,5 mm',
                'price' => 29000,
                'image' => 'earphone-bass-clear.jpg',
                'description' => 'Earphone berkabel dengan konektor jack 3,5 mm dan mikrofon di kabel. Suara bass cukup terasa untuk musik maupun panggilan.',
            ],
            [
                'name' => 'Powerbank Slim 10.000 mAh',
                'type' => 'Powerbank',
                'compatibility' => 'Universal (USB-C dan USB-A)',
                'price' => 165000,
                'image' => 'powerbank-slim-10000.jpg',
                'description' => 'Powerbank tipis berkapasitas 10.000 mAh yang muat di saku. Dilengkapi lampu indikator sisa daya.',
            ],
            [
                'name' => 'Tempered Glass Privasi Anti-Intip',
                'type' => 'Pelindung Layar',
                'compatibility' => 'Oppo A58',
                'price' => 25000,
                'image' => 'tempered-glass-privasi.jpg',
                'description' => 'Pelindung layar kaca dengan lapisan privasi sehingga layar sulit dilihat dari samping. Tebal 0,33 mm dengan tepi 2.5D.',
            ],
            [
                'name' => 'Holder Spion Motor Peredam Getar',
                'type' => 'Holder & Stand',
                'compatibility' => 'Layar 4,7 sampai 6,7 inci',
                'price' => 85000,
                'image' => 'holder-spion-motor.jpg',
                'description' => 'Holder HP yang dipasang di spion motor dengan klem logam. Dilengkapi peredam karet untuk mengurangi getaran saat berkendara.',
            ],
            [
                'name' => 'Stand Lipat Aluminium Meja',
                'type' => 'Holder & Stand',
                'compatibility' => 'Semua HP dan tablet kecil',
                'price' => 52000,
                'image' => 'stand-lipat-aluminium.jpg',
                'description' => 'Stand lipat dari aluminium dengan sudut yang bisa diatur. Setelah dilipat menjadi tipis sehingga mudah disimpan di tas.',
            ],
            [
                'name' => 'Adaptor OTG USB-C ke USB-A',
                'type' => 'Adaptor',
                'compatibility' => 'HP dengan port USB-C',
                'price' => 18000,
                'image' => 'adaptor-otg-usbc.jpg',
                'description' => 'Adaptor kecil untuk menyambungkan flashdisk, mouse, atau keyboard ke HP lewat port USB-C.',
            ],
        ];

        foreach ($accessories as $accessory) {
            Accessory::create($accessory);
        }
    }
}
