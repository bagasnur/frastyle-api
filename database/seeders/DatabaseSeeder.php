<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'bagasnur',
            'email' => 'bagas@frastyle.com',
            'img_profile' => 'https://avatars.githubusercontent.com/u/44259946?v=4',
            'password' => bcrypt('admin123')
        ]);
        DB::table('versions')->insert([
            'id' => 1,
            'number' => '1',
            'stage' => 'beta'
        ]);
        DB::table('categories')->insert([
        [
            'id' => 1,
            'category_idn' => 'Memulai',
            'category_eng' => 'Get Started'
        ],[
            'id' => 2,
            'category_idn' => 'Tata Letak',
            'category_eng' => 'Layouts'
        ],[
            'id' => 3,
            'category_idn' => 'Tipografi',
            'category_eng' => 'Typography'
        ],[
            'id' => 4,
            'category_idn' => 'Elemen',
            'category_eng' => 'Elements'
        ],[
            'id' => 5,
            'category_idn' => 'Komponen',
            'category_eng' => 'Components'
        ],[
            'id' => 6,
            'category_idn' => 'Perlengkapan',
            'category_eng' => 'Utilities'
        ]
        ]);
        DB::table('tags')->insert([
        [
            'id' => 1,
            'name' => 'Box',
            'tag_alt' => 'Kotak, Kolom, Column'
        ],[
            'id' => 2,
            'name' => 'Container',
            'tag_alt' => 'Pembungkus'
        ],[
            'id' => 3,
            'name' => 'Content Delivery Network',
            'tag_alt' => 'CDN, Jaringan Pengiriman Konten'
        ],[
            'id' => 4,
            'name' => 'Download',
            'tag_alt' => 'Unduh'
        ],[
            'id' => 5,
            'name' => 'Framework',
            'tag_alt' => 'Kerangka Kerja'
        ],[
            'id' => 6,
            'name' => 'Fonts',
            'tag_alt' => 'Teks, Size, Text'
        ],[
            'id' => 7,
            'name' => 'Package Manager',
            'tag_alt' => 'Paket Manajer Node, NPM, Yarn'
        ],[
            'id' => 8,
            'name' => 'Row',
            'tag_alt' => 'Baris'
        ]
        ]);
        DB::table('contents')->insert([
        [
            'id' => 1,
            'title' => 'Pengantar',
            'content_file' => 'introduction.mdx',
            'category_id' => 1
        ],[
            'id' => 2,
            'title' => 'Dukungan Browser',
            'content_file' => 'browser-support.mdx',
            'category_id' => 1
        ],[
            'id' => 3,
            'title' => 'Instalasi',
            'content_file' => 'installation.mdx',
            'category_id' => 1
        ],[
            'id' => 4,
            'title' => 'Tema',
            'content_file' => 'theme.mdx',
            'category_id' => 1
        ],[
            'id' => 5,
            'title' => 'Responsif',
            'content_file' => 'responsive.mdx',
            'category_id' => 2
        ],[
            'id' => 6,
            'title' => 'Sistem Grid',
            'content_file' => 'grid-system.mdx',
            'category_id' => 2
        ],[
            'id' => 7,
            'title' => 'Pemosisian',
            'content_file' => 'alignment.mdx',
            'category_id' => 2
        ],[
            'id' => 8,
            'title' => 'Ukuran',
            'content_file' => 'font-size.mdx',
            'category_id' => 3
        ],[
            'id' => 9,
            'title' => 'Penyelarasan',
            'content_file' => 'font-alignment.mdx',
            'category_id' => 3
        ],[
            'id' => 10,
            'title' => 'Opsi',
            'content_file' => 'font-options.mdx',
            'category_id' => 3
        ],[
            'id' => 11,
            'title' => 'Tombol',
            'content_file' => 'buttons.mdx',
            'category_id' => 4
        ],[
            'id' => 12,
            'title' => 'Preformat',
            'content_file' => 'codes.mdx',
            'category_id' => 4
        ],[
            'id' => 13,
            'title' => 'Formulir',
            'content_file' => 'forms.mdx',
            'category_id' => 4
        ],[
            'id' => 14,
            'title' => 'Gambar',
            'content_file' => 'images.mdx',
            'category_id' => 4
        ],[
            'id' => 15,
            'title' => 'List',
            'content_file' => 'lists.mdx',
            'category_id' => 4
        ],[
            'id' => 16,
            'title' => 'Kutipan',
            'content_file' => 'quotations.mdx',
            'category_id' => 4
        ],[
            'id' => 17,
            'title' => 'Tabel',
            'content_file' => 'tables.mdx',
            'category_id' => 4
        ],[
            'id' => 18,
            'title' => 'Pesan',
            'content_file' => 'alerts.mdx',
            'category_id' => 5
        ],[
            'id' => 19,
            'title' => 'Lencana',
            'content_file' => 'badges.mdx',
            'category_id' => 5
        ],[
            'id' => 20,
            'title' => 'Kartu',
            'content_file' => 'cards.mdx',
            'category_id' => 5
        ],[
            'id' => 21,
            'title' => 'Bayangan',
            'content_file' => 'shadows.mdx',
            'category_id' => 6
        ],[
            'id' => 22,
            'title' => 'Margin',
            'content_file' => 'margins.mdx',
            'category_id' => 6
        ],[
            'id' => 23,
            'title' => 'Padding',
            'content_file' => 'paddings.mdx',
            'category_id' => 6
        ],[
            'id' => 24,
            'title' => 'Warna',
            'content_file' => 'colors.mdx',
            'category_id' => 6
        ]
        ]);
        DB::table('version_content')->insert([
        [
            'id' => 1,
            'content_id' => 1,
            'version_id' => 1
        ],[
            'id' => 2,
            'content_id' => 2,
            'version_id' => 1
        ],[
            'id' => 3,
            'content_id' => 3,
            'version_id' => 1
        ],[
            'id' => 4,
            'content_id' => 4,
            'version_id' => 1
        ],[
            'id' => 5,
            'content_id' => 5,
            'version_id' => 1
        ],[
            'id' => 6,
            'content_id' => 6,
            'version_id' => 1
        ],[
            'id' => 7,
            'content_id' => 7,
            'version_id' => 1
        ],[
            'id' => 8,
            'content_id' => 8,
            'version_id' => 1
        ],[
            'id' => 9,
            'content_id' => 9,
            'version_id' => 1
        ],[
            'id' => 10,
            'content_id' => 10,
            'version_id' => 1
        ],[
            'id' => 11,
            'content_id' => 11,
            'version_id' => 1
        ],[
            'id' => 12,
            'content_id' => 12,
            'version_id' => 1
        ],[
            'id' => 13,
            'content_id' => 13,
            'version_id' => 1
        ],[
            'id' => 14,
            'content_id' => 14,
            'version_id' => 1
        ],[
            'id' => 15,
            'content_id' => 15,
            'version_id' => 1
        ],[
            'id' => 16,
            'content_id' => 16,
            'version_id' => 1
        ],[
            'id' => 17,
            'content_id' => 17,
            'version_id' => 1
        ],[
            'id' => 18,
            'content_id' => 18,
            'version_id' => 1
        ],[
            'id' => 19,
            'content_id' => 19,
            'version_id' => 1
        ],[
            'id' => 20,
            'content_id' => 20,
            'version_id' => 1
        ],[
            'id' => 21,
            'content_id' => 21,
            'version_id' => 1
        ],[
            'id' => 22,
            'content_id' => 22,
            'version_id' => 1
        ],[
            'id' => 23,
            'content_id' => 23,
            'version_id' => 1
        ],[
            'id' => 24,
            'content_id' => 24,
            'version_id' => 1
        ]
        ]);
    }
}
