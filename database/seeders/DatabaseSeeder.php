<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'bagasnur',
            'email' => 'bagas@frastyle.com',
            'img_profile' => 'https://avatars.githubusercontent.com/u/44259946?v=4',
            'password' => bcrypt('admin123'),
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => NULL,
            'remember_token' => NULL
        ]);

        // Categories
        DB::table('categories')->insert([
        [
            'id' => 1,
            'category_idn' => 'Memulai',
            'category_eng' => 'Get Started',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 2,
            'category_idn' => 'Tata Letak',
            'category_eng' => 'Layouts',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 3,
            'category_idn' => 'Tipografi',
            'category_eng' => 'Typography',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 4,
            'category_idn' => 'Elemen',
            'category_eng' => 'Elements',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 5,
            'category_idn' => 'Komponen',
            'category_eng' => 'Components',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 6,
            'category_idn' => 'Perlengkapan',
            'category_eng' => 'Utilities',
            'created_at' => now(),
            'updated_at' => now()
        ]
        ]);

        // Contents
        DB::table('contents')->insert([
        [
            'id' => 1,
            'title' => 'Pengantar',
            'content_file' => 'introductions.mdx',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 2,
            'title' => 'Dukungan Browser',
            'content_file' => 'browsers-supports.mdx',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 3,
            'title' => 'Instalasi',
            'content_file' => 'installations.mdx',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 4,
            'title' => 'Tema & Template',
            'content_file' => 'using-themes-or-templates.mdx',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 5,
            'title' => 'Responsif',
            'content_file' => 'responsive.mdx',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 6,
            'title' => 'Sistem Grid',
            'content_file' => 'grids-systems.mdx',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 7,
            'title' => 'Pemosisian',
            'content_file' => 'grids-alignments.mdx',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 8,
            'title' => 'Ukuran',
            'content_file' => 'fonts-sizes.mdx',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 9,
            'title' => 'Penyelarasan',
            'content_file' => 'fonts-alignments.mdx',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 10,
            'title' => 'Opsi',
            'content_file' => 'fonts-options.mdx',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 11,
            'title' => 'Tombol & Tautan',
            'content_file' => 'buttons-and-links.mdx',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 12,
            'title' => 'Kode & Preformat',
            'content_file' => 'codes.mdx',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 13,
            'title' => 'Formulir',
            'content_file' => 'forms.mdx',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 14,
            'title' => 'Gambar',
            'content_file' => 'images-options.mdx',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 15,
            'title' => 'List',
            'content_file' => 'lists.mdx',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 16,
            'title' => 'Kutipan',
            'content_file' => 'quotations.mdx',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 17,
            'title' => 'Tabel',
            'content_file' => 'tables.mdx',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 18,
            'title' => 'Pesan',
            'content_file' => 'alerts.mdx',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 19,
            'title' => 'Lencana',
            'content_file' => 'badges.mdx',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 20,
            'title' => 'Kartu',
            'content_file' => 'cards.mdx',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 21,
            'title' => 'Navigasi',
            'content_file' => 'breadcrumbs.mdx',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 22,
            'title' => 'Bayangan',
            'content_file' => 'shadows.mdx',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 23,
            'title' => 'Margin & Padding',
            'content_file' => 'margins-and-paddings.mdx',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 24,
            'title' => 'Warna',
            'content_file' => 'colors.mdx',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]
        ]);

        // Tags
        DB::table('tags')->insert([
        [
            'id' => 1,
            'name' => 'Framework',
            'tag_alt' => 'Kerangka Kerja, Tools, Alat',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 2,
            'name' => 'Breakpoints',
            'tag_alt' => 'Skala Layar Monitor, Desktop, Komputer, Ponsel Pintar, Smartphones, Tablets, Telepon, Telephone',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 3,
            'name' => 'XS, S, M, L, XL',
            'tag_alt' => 'Super, Extra, Small, Medium, Large, Sangat, Ekstra',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 4,
            'name' => 'Alignment Grid',
            'tag_alt' => 'Flex, Justify, Content, Items, Self, Directions, Reverse, Wrap, Arah, Dibalik',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 5,
            'name' => 'Box',
            'tag_alt' => 'Kotak',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 6,
            'name' => 'Columns',
            'tag_alt' => 'Kolom',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 7,
            'name' => 'Container',
            'tag_alt' => 'Pembungkus',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 8,
            'name' => 'Row',
            'tag_alt' => 'Baris',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 9,
            'name' => 'Left, Center, Right',
            'tag_alt' => 'Kiri, Tengah, Kanan',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 10,
            'name' => 'Top, Middle, Bottom',
            'tag_alt' => 'Atas, Tengah, Bawah',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 11,
            'name' => 'Tipe Browser',
            'tag_alt' => 'Google Chrome, Firefox, Opera, Microsoft Edge, Safari, Internet Explorer, IE, Samsung',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 12,
            'name' => 'Content Delivery Network',
            'tag_alt' => 'CDN, Jaringan Pengiriman Konten, jsDelivr, Unpkg',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 13,
            'name' => 'Download',
            'tag_alt' => 'Unduh File',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 14,
            'name' => 'Package Manager',
            'tag_alt' => 'Paket Manajer Node, NPM, Yarn',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 15,
            'name' => 'Repositori Github',
            'tag_alt' => 'Repository, Repositories',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 16,
            'name' => 'Personalisasi',
            'tag_alt' => 'Customize, Customization, Personalized',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 17,
            'name' => 'Fonts',
            'tag_alt' => 'Size, Text, Headings, 1, 2, 3, 4, 5, 6, Paragraph, Span, Teks, Ukuran, Judul, Paragraf',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 18,
            'name' => 'Danger, Failed',
            'tag_alt' => 'Bahaya, Gagal',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 19,
            'name' => 'Dark, Black',
            'tag_alt' => 'Gelap, Hitam',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 20,
            'name' => 'Info',
            'tag_alt' => 'Information, Informasi',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 21,
            'name' => 'Light, White',
            'tag_alt' => 'Cerah, Putih',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 22,
            'name' => 'Primary',
            'tag_alt' => 'Utama, Main, Default',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 23,
            'name' => 'Secondary',
            'tag_alt' => 'Kedua',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 24,
            'name' => 'Sukses',
            'tag_alt' => 'Success',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 25,
            'name' => 'Warning',
            'tag_alt' => 'Perhatian',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 26,
            'name' => 'Large',
            'tag_alt' => 'Besar, Big',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 27,
            'name' => 'Normal',
            'tag_alt' => 'Biasa',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 28,
            'name' => 'Small',
            'tag_alt' => 'Kecil, Mini',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 29,
            'name' => 'Image Render',
            'tag_alt' => 'Fit, Cover, Contain, Scale Down, Fill',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 30,
            'name' => 'Opsi Input',
            'tag_alt' => 'Bidang isian, Radio, Select, Checkbox, Pilihan, Multiple, Beberapa, Date, Tanggal, Kalender, Textarea',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 31,
            'name' => 'Opsi List',
            'tag_alt' => 'Daftar, Definition List, Descriptions, Label, Unordered, Ordered, Berurutan, Simbol, Symbols',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 32,
            'name' => 'Opsi Teks',
            'tag_alt' => 'Uppercase, Lowercase, Capitalize, Bold, Italic, Underline, Strikethrough, Mark, Superscript, Subscript, Abbr, Kapital, Tebal, Miring, Garis Bawah',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 33,
            'name' => 'Quote',
            'tag_alt' => 'Cite, Sitasi',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 34,
            'name' => 'Var, Kbd',
            'tag_alt' => 'Keyboard, Variables',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 35,
            'name' => 'Type',
            'tag_alt' => 'Tipe, Pilihan, Choice',
            'created_at' => now(),
            'updated_at' => now()
        ]
        ]);

        // Versions
        DB::table('versions')->insert([
            'id' => 1,
            'number' => '1',
            'stage' => 'release',
            'created_at' => '2021-10-13 23:29:07',
            'updated_at' => '2021-10-13 23:29:07'
        ]);

        // Tag-Content
        DB::table('tag_content')->insert([
        // Framework
        [
            'id' => 1,
            'content_id' => 1,
            'tag_id' => 1
        ],[
            'id' => 2,
            'content_id' => 2,
            'tag_id' => 1
        ],[
            'id' => 3,
            'content_id' => 3,
            'tag_id' => 1
        ],[
            'id' => 4,
            'content_id' => 4,
            'tag_id' => 1
        ],[
            'id' => 5,
            'content_id' => 5,
            'tag_id' => 1
        ],[
        // Breakpoints
            'id' => 6,
            'content_id' => 5,
            'tag_id' => 2
        ],[
            'id' => 7,
            'content_id' => 6,
            'tag_id' => 2
        ],[
        // XS, S, M, L, XL
            'id' => 8,
            'content_id' => 5,
            'tag_id' => 3
        ],[
            'id' => 9,
            'content_id' => 6,
            'tag_id' => 3
        ],[
            'id' => 10,
            'content_id' => 7,
            'tag_id' => 3
        ],[
            'id' => 11,
            'content_id' => 9,
            'tag_id' => 3
        ],[
            'id' => 12,
            'content_id' => 10,
            'tag_id' => 3
        ],[
            'id' => 13,
            'content_id' => 11,
            'tag_id' => 3
        ],[
            'id' => 14,
            'content_id' => 12,
            'tag_id' => 3
        ],[
            'id' => 15,
            'content_id' => 13,
            'tag_id' => 3
        ],[
            'id' => 16,
            'content_id' => 23,
            'tag_id' => 3
        ],[
        // Alignment Grid
            'id' => 17,
            'content_id' => 7,
            'tag_id' => 4
        ],[
        // Box
            'id' => 18,
            'content_id' => 6,
            'tag_id' => 5
        ],[
        // Columns
            'id' => 19,
            'content_id' => 6,
            'tag_id' => 6
        ],[
            'id' => 20,
            'content_id' => 7,
            'tag_id' => 6
        ],[
        // Container
            'id' => 21,
            'content_id' => 6,
            'tag_id' => 7
        ],[
        // Row
            'id' => 22,
            'content_id' => 6,
            'tag_id' => 8
        ],[
            'id' => 23,
            'content_id' => 7,
            'tag_id' => 8
        ],[
        // L, C, R
            'id' => 24,
            'content_id' => 7,
            'tag_id' => 9
        ],[
            'id' => 25,
            'content_id' => 9,
            'tag_id' => 9
        ],[
        // T, M, B
            'id' => 26,
            'content_id' => 7,
            'tag_id' => 10
        ],[
        // Tipe Browser
            'id' => 27,
            'content_id' => 2,
            'tag_id' => 11
        ],[
        // CDN
            'id' => 28,
            'content_id' => 3,
            'tag_id' => 12
        ],[
            'id' => 29,
            'content_id' => 4,
            'tag_id' => 12
        ],[
        // Download
            'id' => 30,
            'content_id' => 3,
            'tag_id' => 13
        ],[
            'id' => 31,
            'content_id' => 4,
            'tag_id' => 13
        ],[
        // NPM, Yarn
            'id' => 32,
            'content_id' => 3,
            'tag_id' => 14
        ],[
            'id' => 33,
            'content_id' => 4,
            'tag_id' => 14
        ],[
        // Repo Github
            'id' => 34,
            'content_id' => 3,
            'tag_id' => 15
        ],[
            'id' => 35,
            'content_id' => 4,
            'tag_id' => 15
        ],[
        // Customize
            'id' => 36,
            'content_id' => 4,
            'tag_id' => 16
        ],[
            'id' => 37,
            'content_id' => 11,
            'tag_id' => 16
        ],[
            'id' => 38,
            'content_id' => 12,
            'tag_id' => 16
        ],[
            'id' => 39,
            'content_id' => 13,
            'tag_id' => 16
        ],[
            'id' => 40,
            'content_id' => 15,
            'tag_id' => 16
        ],[
            'id' => 41,
            'content_id' => 17,
            'tag_id' => 16
        ],[
            'id' => 42,
            'content_id' => 18,
            'tag_id' => 16
        ],[
            'id' => 43,
            'content_id' => 19,
            'tag_id' => 16
        ],[
            'id' => 44,
            'content_id' => 20,
            'tag_id' => 16
        ],[
            'id' => 45,
            'content_id' => 21,
            'tag_id' => 16
        ],[
        // Fonts
            'id' => 46,
            'content_id' => 8,
            'tag_id' => 17
        ],[
            'id' => 47,
            'content_id' => 9,
            'tag_id' => 17
        ],[
            'id' => 48,
            'content_id' => 10,
            'tag_id' => 17
        ],[
        // Danger, Failed
            'id' => 49,
            'content_id' => 11,
            'tag_id' => 18
        ],[
            'id' => 50,
            'content_id' => 18,
            'tag_id' => 18
        ],[
            'id' => 51,
            'content_id' => 19,
            'tag_id' => 18
        ],[
            'id' => 52,
            'content_id' => 24,
            'tag_id' => 18
        ],[
        // Dark, Black
            'id' => 53,
            'content_id' => 11,
            'tag_id' => 19
        ],[
            'id' => 54,
            'content_id' => 18,
            'tag_id' => 19
        ],[
            'id' => 55,
            'content_id' => 19,
            'tag_id' => 19
        ],[
            'id' => 56,
            'content_id' => 22,
            'tag_id' => 19
        ],[
            'id' => 57,
            'content_id' => 24,
            'tag_id' => 19
        ],[
        // Info
            'id' => 58,
            'content_id' => 11,
            'tag_id' => 20
        ],[
            'id' => 59,
            'content_id' => 18,
            'tag_id' => 20
        ],[
            'id' => 60,
            'content_id' => 19,
            'tag_id' => 20
        ],[
            'id' => 61,
            'content_id' => 24,
            'tag_id' => 20
        ],[
        // light, White
            'id' => 62,
            'content_id' => 11,
            'tag_id' => 21
        ],[
            'id' => 63,
            'content_id' => 18,
            'tag_id' => 21
        ],[
            'id' => 64,
            'content_id' => 19,
            'tag_id' => 21
        ],[
            'id' => 65,
            'content_id' => 22,
            'tag_id' => 21
        ],[
            'id' => 66,
            'content_id' => 24,
            'tag_id' => 21
        ],[
        // Primary
            'id' => 67,
            'content_id' => 11,
            'tag_id' => 22
        ],[
            'id' => 68,
            'content_id' => 18,
            'tag_id' => 22
        ],[
            'id' => 69,
            'content_id' => 19,
            'tag_id' => 22
        ],[
            'id' => 70,
            'content_id' => 24,
            'tag_id' => 22
        ],[
        // Secondary
            'id' => 71,
            'content_id' => 11,
            'tag_id' => 23
        ],[
            'id' => 72,
            'content_id' => 18,
            'tag_id' => 23
        ],[
            'id' => 73,
            'content_id' => 19,
            'tag_id' => 23
        ],[
            'id' => 74,
            'content_id' => 24,
            'tag_id' => 23
        ],[
        // Success
            'id' => 75,
            'content_id' => 11,
            'tag_id' => 24
        ],[
            'id' => 76,
            'content_id' => 18,
            'tag_id' => 24
        ],[
            'id' => 77,
            'content_id' => 19,
            'tag_id' => 24
        ],[
            'id' => 78,
            'content_id' => 24,
            'tag_id' => 24
        ],[
        // Warning
            'id' => 79,
            'content_id' => 11,
            'tag_id' => 25
        ],[
            'id' => 80,
            'content_id' => 18,
            'tag_id' => 25
        ],[
            'id' => 81,
            'content_id' => 19,
            'tag_id' => 25
        ],[
            'id' => 82,
            'content_id' => 24,
            'tag_id' => 25
        ],[
        // Large
            'id' => 83,
            'content_id' => 10,
            'tag_id' => 26
        ],[
            'id' => 84,
            'content_id' => 11,
            'tag_id' => 26
        ],[
            'id' => 85,
            'content_id' => 19,
            'tag_id' => 26
        ],[
            'id' => 86,
            'content_id' => 22,
            'tag_id' => 26
        ],[
        // Normal
            'id' => 87,
            'content_id' => 11,
            'tag_id' => 27
        ],[
            'id' => 88,
            'content_id' => 19,
            'tag_id' => 27
        ],[
            'id' => 89,
            'content_id' => 22,
            'tag_id' => 27
        ],[
        // Small
            'id' => 90,
            'content_id' => 10,
            'tag_id' => 28
        ],[
            'id' => 91,
            'content_id' => 11,
            'tag_id' => 28
        ],[
            'id' => 92,
            'content_id' => 19,
            'tag_id' => 28
        ],[
            'id' => 93,
            'content_id' => 22,
            'tag_id' => 28
        ],[
        // Image Render
            'id' => 94,
            'content_id' => 14,
            'tag_id' => 29
        ],[
        // Opsi Input
            'id' => 95,
            'content_id' => 13,
            'tag_id' => 30
        ],[
        // Opsi List
            'id' => 96,
            'content_id' => 15,
            'tag_id' => 31
        ],[
        // Opsi Teks
            'id' => 97,
            'content_id' => 10,
            'tag_id' => 32
        ],[
        // Quote
            'id' => 98,
            'content_id' => 16,
            'tag_id' => 33
        ],[
        // Var, Kbd
            'id' => 99,
            'content_id' => 12,
            'tag_id' => 34
        ],[
        // Type
            'id' => 100,
            'content_id' => 10,
            'tag_id' => 35
        ],[
            'id' => 101,
            'content_id' => 11,
            'tag_id' => 35
        ],[
            'id' => 102,
            'content_id' => 13,
            'tag_id' => 35
        ],[
            'id' => 103,
            'content_id' => 14,
            'tag_id' => 35
        ],[
            'id' => 104,
            'content_id' => 15,
            'tag_id' => 35
        ],[
            'id' => 105,
            'content_id' => 16,
            'tag_id' => 35
        ],[
            'id' => 106,
            'content_id' => 18,
            'tag_id' => 35
        ],[
            'id' => 107,
            'content_id' => 19,
            'tag_id' => 35
        ],[
            'id' => 108,
            'content_id' => 20,
            'tag_id' => 35
        ],[
            'id' => 109,
            'content_id' => 22,
            'tag_id' => 35
        ],[
            'id' => 110,
            'content_id' => 24,
            'tag_id' => 35
        ]
        ]);

        // Version-Content
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
