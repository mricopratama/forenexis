<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Keamanan Siber',
            'description' => 'Mempelajari metode dan teknologi untuk melindungi sistem, jaringan, dan data dari serangan, akses tidak sah, serta ancaman digital lainnya. Fokusnya meliputi enkripsi, firewall, analisis malware, hingga forensic digital.',
            'slug' => 'keamanan-siber',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Pengembangan Perangkat Lunak',
            'description' => 'Mencakup prinsip, teknik, dan alat untuk merancang, membangun, menguji, serta memelihara perangkat lunak yang efisien dan berkualitas tinggi. Meliputi pengembangan aplikasi web, mobile, hingga sistem terdistribusi.',
            'slug' => 'pengembangan-perangkat-lunak',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Kecerdasan Buatan (AI)',
            'description' => 'Bidang yang berfokus pada pengembangan sistem komputer yang dapat meniru kecerdasan manusia, seperti pembelajaran mesin (machine learning), pemrosesan bahasa alami (NLP), dan visi komputer.',
            'slug' => 'kecerdasan-buatan',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Jaringan dan Komunikasi',
            'description' => 'Mempelajari infrastruktur jaringan komputer, komunikasi data, protokol internet, dan teknologi nirkabel untuk memastikan koneksi yang aman dan efisien dalam sistem terdistribusi.',
            'slug' => 'jaringan-komunikasi',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'Data Science dan Big Data',
            'description' => 'Berfokus pada analisis, pengolahan, dan interpretasi data dalam jumlah besar menggunakan teknik statistik, pemodelan data, dan kecerdasan buatan untuk menghasilkan wawasan bisnis maupun ilmiah.',
            'slug' => 'data-science-big-data',
            'color' => 'purple'
        ]);
    }
}
