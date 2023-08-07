<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `barangs` (`id`, `nama_barang`, `gambar`, `deskripsi`, `kontak_penjual`, `harga`, `created_at`, `updated_at`) VALUES
        (1, 'Kripik', 'uploads/produk/1691315332WhatsApp Image 2023-07-31 at 09.53.17.jpg', '<p>Fresh baru</p>', '082175831680', 20000, '2023-08-06 02:48:52', '2023-08-06 02:48:52');
        ");

        DB::insert("INSERT INTO `comments` (`id`, `posts_id`, `parent_id`, `username`, `email`, `comment`, `created_at`, `updated_at`) VALUES
        (1, 1, NULL, 'hohehyhut', 'zavywipexe@mailinator.com', 'Dolor qui cupiditate', '2023-08-06 02:47:51', '2023-08-06 02:47:51');
        ");

        DB::insert("INSERT INTO `lembagas` (`id`, `nama`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
        (1, 'Aparat desa', 'Struktur aparat desa', 'uploads/bagan/1594172136BAGAN.png', NULL, NULL);
        ");

        DB::insert("INSERT INTO `posts` (`id`, `judul`, `content`, `thumbnail`, `slug`, `created_at`, `updated_at`) VALUES
        (1, 'Bersama Rombongan KKN', '<p>Bersama rombongan KKN proker</p>', 'uploads/posts/1691315229IMG_7984.JPG', 'bersama-rombongan-kkn', '2023-08-06 02:47:09', '2023-08-06 02:47:09');
        ");

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('11111111'),
        ]);
    }
}
