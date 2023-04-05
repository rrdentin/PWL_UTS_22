<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_buku' => 1,
                'judul' => 'Belajar Database',
                'pengarang' => 'Rr. Denti N',
                'jenis_buku' => 'Buku Umum',
                'harga' => '102.000',
                'qty' => 50,
            ],
            [
                'kode_buku' => 2,
                'judul' => 'Belajar Membaca',
                'pengarang' => 'Yunus Abadi',
                'jenis_buku' => 'Buku Umum',
                'harga' => '110.000',
                'qty' => 60,
            ],
            [
                'kode_buku' => 3,
                'judul' => 'Dari Langit ke Bumi',
                'pengarang' => 'Ferdina Malika',
                'jenis_buku' => 'Novel',
                'harga' => '75000',
                'qty' => 40,
            ],
            [
                'kode_buku' => 4,
                'judul' => 'Belajar PWL',
                'pengarang' => 'Sukmawati',
                'jenis_buku' => 'Buku Umum',
                'harga' => '100.000',
                'qty' => 30,
            ],
            [
                'kode_buku' => 5,
                'judul' => 'One Piece',
                'pengarang' => 'Oda',
                'jenis_buku' => 'Komik',
                'harga' => '75000',
                'qty' => 100,
            ],
            [
                'kode_buku' => 6,
                'judul' => 'Langit Disana',
                'pengarang' => 'Valkyrae',
                'jenis_buku' => 'Novel',
                'harga' => '99.000',
                'qty' => 20,
            ],
            [
                'kode_buku' => 7,
                'judul' => 'Belajar Membaca',
                'pengarang' => 'Jamal Jainudin',
                'jenis_buku' => 'Buku Umum',
                'harga' => '30.000',
                'qty' => 50,
            ],
            [
                'kode_buku' => 8,
                'judul' => 'Kamus Bahasa Inggris',
                'pengarang' => 'Sykkuno',
                'jenis_buku' => 'Kamus',
                'harga' => '70.000',
                'qty' => 40,
            ],
            [
                'kode_buku' => 9,
                'judul' => 'Seandainya Kau Tahu',
                'pengarang' => 'Gerald Ben',
                'jenis_buku' => 'Novel',
                'harga' => '120.000',
                'qty' => 15,
            ],
            [
                'kode_buku' => 10,
                'judul' => 'Belajar Memasak',
                'pengarang' => 'Dwi Lestari',
                'jenis_buku' => 'Buku Umum',
                'harga' => '60.000',
                'qty' => 80,
            ],
            [
                'kode_buku' => 11,
                'judul' => 'Olaa Laa',
                'pengarang' => 'Haruku',
                'jenis_buku' => 'Komik',
                'harga' => '80.000',
                'qty' => 40,
            ],
            [
                'kode_buku' => 12,
                'judul' => 'Belajar Jarkom',
                'pengarang' => 'Ricky Loan',
                'jenis_buku' => 'Buku Umum',
                'harga' => '99.000',
                'qty' => 40,
            ],
            [
                'kode_buku' => 13,
                'judul' => 'Kamus Bahasa Mandarin',
                'pengarang' => 'Xi Feng',
                'jenis_buku' => 'Kamus',
                'harga' => '25.000',
                'qty' => 30,
            ],
            [
                'kode_buku' =>14,
                'judul' => 'Rahasia',
                'pengarang' => 'Wulanfadi',
                'jenis_buku' => 'Novel',
                'harga' => '98.000',
                'qty' => 40,
            ],
            [
                'kode_buku' => 15,
                'judul' => 'Belajar Menulis',
                'pengarang' => 'Satya Setia',
                'jenis_buku' => 'Buku Umum',
                'harga' => '60.000',
                'qty' => 40,
            ],
            [
                'kode_buku' => 16,
                'judul' => 'Harimau Malam',
                'pengarang' => 'Antah Y',
                'jenis_buku' => 'Komik',
                'harga' => '40.000',
                'qty' => 50,
            ],
            [
                'kode_buku' => 17,
                'judul' => 'Belajar ADBO',
                'pengarang' => 'Stewart Liam',
                'jenis_buku' => 'Buku Umum',
                'harga' => '70.000',
                'qty' => 10,
            ],
            [
                'kode_buku' => 18,
                'judul' => 'Belajar Database',
                'pengarang' => 'Rr. Denti N',
                'jenis_buku' => 'Buku Umum',
                'harga' => '102.000',
                'qty' => 50,
            ],
            [
                'kode_buku' => 19,
                'judul' => 'Belajar Database',
                'pengarang' => 'Rr. Denti N',
                'jenis_buku' => 'Buku Umum',
                'harga' => '102.000',
                'qty' => 50,
            ],
            [
                'kode_buku' => 20,
                'judul' => 'Apalah arti makan',
                'pengarang' => 'Pakiyan Jum',
                'jenis_buku' => 'Novel',
                'harga' => '60.000',
                'qty' => 30,
            ],
            [
                'kode_buku' => 21,
                'judul' => 'Belajar Berkreasi',
                'pengarang' => 'Made Kila',
                'jenis_buku' => 'Buku Umum',
                'harga' => '40.000',
                'qty' => 50,
            ],
            [
                'kode_buku' => 22,
                'judul' => 'Fairy Tail',
                'pengarang' => 'Oda',
                'jenis_buku' => 'Komik',
                'harga' => '88.000',
                'qty' => 40,
            ],
            [
                'kode_buku' => 23,
                'judul' => 'Kamus Kanji',
                'pengarang' => 'Yamada Jun',
                'jenis_buku' => 'Kamus',
                'harga' => '87.000',
                'qty' => 40,
            ],

        ];
        DB::table('bukus')->insert($data);
    }
}
