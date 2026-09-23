<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        // 1. Seed Admin
        $this->db->table('admins')->emptyTable();
        $this->db->table('admins')->insert([
            'username'   => 'admin',
            'password'   => password_hash('admin123', PASSWORD_DEFAULT),
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // 2. Seed Menus (8 variations)
        $this->db->table('menus')->emptyTable();
        $menus = [
            [
                'name'         => 'Ayam Betutu Original',
                'slug'         => 'ayam-betutu-original',
                'description'  => 'Ayam betutu khas Gilimanuk dengan bumbu base genep autentik Bali yang meresap sempurna, dimasak perlahan hingga daging empuk, lembut, dan kaya rasa rempah tradisional.',
                'price'        => 65000,
                'category'     => 'Ayam Betutu',
                'image'        => 'ayam-betutu-original.jpg',
                'is_available' => 1,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'name'         => 'Ayam Betutu Pedas',
                'slug'         => 'ayam-betutu-pedas',
                'description'  => 'Kombinasi bumbu rempah Bali dengan ekstra cabai rawit merah melimpah, memberikan sensasi pedas menyengat yang membakar lidah berpadu aroma daun pisang yang harum.',
                'price'        => 68000,
                'category'     => 'Ayam Betutu',
                'image'        => 'ayam-betutu-pedas.jpg',
                'is_available' => 1,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'name'         => 'Ayam Betutu Bakar',
                'slug'         => 'ayam-betutu-bakar',
                'description'  => 'Ayam betutu yang dipanggang di atas bara arang batok kelapa, menghasilkan aroma smokey yang memikat dengan karamelisasi bumbu rempah khas Bali.',
                'price'        => 72000,
                'category'     => 'Ayam Betutu',
                'image'        => 'ayam-betutu-bakar.jpg',
                'is_available' => 1,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'name'         => 'Ayam Betutu Panggang',
                'slug'         => 'ayam-betutu-panggang',
                'description'  => 'Ayam utuh yang dipanggang dengan olesan bumbu rempah rahasia Ashraf Betutu, kulit luar renyah keemasan dengan kelembutan daging berkuah pekat di bagian dalam.',
                'price'        => 75000,
                'category'     => 'Ayam Betutu',
                'image'        => 'ayam-betutu-panggang.jpg',
                'is_available' => 1,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'name'         => 'Ayam Betutu Sambal Matah',
                'slug'         => 'ayam-betutu-sambal-matah',
                'description'  => 'Sajian ayam betutu empuk disiram limpahan sambal matah segar khas Bali yang diracik dari bawang merah, serai, cabai rawit, terasi bakar, dan minyak kelapa asli.',
                'price'        => 70000,
                'category'     => 'Spesial',
                'image'        => 'ayam-betutu-sambal-matah.jpg',
                'is_available' => 1,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'name'         => 'Ayam Betutu Paket Nasi',
                'slug'         => 'ayam-betutu-paket-nasi',
                'description'  => 'Paket praktis berisi satu porsi ayam betutu empuk, nasi putih hangat, plecing kangkung bumbu tomat pedas, kacang tanah goreng renyah, dan semangkuk kuah betutu gurih.',
                'price'        => 45000,
                'category'     => 'Paket',
                'image'        => 'ayam-betutu-paket-nasi.jpg',
                'is_available' => 1,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'name'         => 'Ayam Betutu Premium',
                'slug'         => 'ayam-betutu-premium',
                'description'  => 'Satu ekor ayam kampung muda utuh pilihan dibumbui 16 aneka rempah luhur Bali, dibungkus pelepah pinang dan daun pisang, dimasak lambat selama 8 jam hingga tulang lunak.',
                'price'        => 125000,
                'category'     => 'Premium',
                'image'        => 'ayam-betutu-premium.jpg',
                'is_available' => 1,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'name'         => 'Ayam Betutu Komplit',
                'slug'         => 'ayam-betutu-komplit',
                'description'  => 'Pilihan hidangan terlengkap: ayam betutu khas Bali, sate lilit ikan tenggiri, sayur urap daun belinjo, sambal matah, sambal embe, nasi gurih beraroma pandan, dan pelengkap.',
                'price'        => 85000,
                'category'     => 'Paket',
                'image'        => 'ayam-betutu-komplit.jpg',
                'is_available' => 1,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
        ];

        $this->db->table('menus')->insertBatch($menus);
    }
}
