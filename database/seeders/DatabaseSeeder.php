<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;
use App\Models\Galeri;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Artikel::create([
            'judul'=>'Siswa sholat dhuha',
            'kategori'=>'Sholat',
            'penulis'=>'Kirara Bernstein',
            'isi'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus ipsum reiciendis totam impedit ad, aspernatur adipisci commodi incidunt, cumque saepe, voluptas ut architecto qui quam necessitatibus quibusdam soluta! Sapiente commodi debitis temporibus, voluptatum aut voluptatibus sequi quod, odio rerum ipsum dolor eum maiores facere eligendi voluptatem, mollitia exercitationem! Quisquam amet, accusamus est dolor sed eaque ipsum laborum non veritatis eveniet!'
        ]);
        Artikel::create([
            'judul'=>'Siswa tadarus 1hari 1juz',
            'kategori'=>'Btq',
            'penulis'=>'Fathul Hidayat',
            'isi'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus ipsum reiciendis totam impedit ad, aspernatur adipisci commodi incidunt, cumque saepe, voluptas ut architecto qui quam necessitatibus quibusdam soluta! Sapiente commodi debitis temporibus, voluptatum aut voluptatibus sequi quod, odio rerum ipsum dolor eum maiores facere eligendi voluptatem, mollitia exercitationem! Quisquam amet, accusamus est dolor sed eaque ipsum laborum non veritatis eveniet!'
        ]);
        Artikel::create([
            'judul'=>'Siswa pengajian di sekolah',
            'kategori'=>'Pengajian',
            'penulis'=>'Muhamad sihabudin',
            'isi'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus ipsum reiciendis totam impedit ad, aspernatur adipisci commodi incidunt, cumque saepe, voluptas ut architecto qui quam necessitatibus quibusdam soluta! Sapiente commodi debitis temporibus, voluptatum aut voluptatibus sequi quod, odio rerum ipsum dolor eum maiores facere eligendi voluptatem, mollitia exercitationem! Quisquam amet, accusamus est dolor sed eaque ipsum laborum non veritatis eveniet!'
        ]);
        Artikel::create([
            'judul'=>'Siswa tadarus 1hari 30juz',
            'kategori'=>'Btq',
            'penulis'=>'Agung',
            'isi'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus ipsum reiciendis totam impedit ad, aspernatur adipisci commodi incidunt, cumque saepe, voluptas ut architecto qui quam necessitatibus quibusdam soluta! Sapiente commodi debitis temporibus, voluptatum aut voluptatibus sequi quod, odio rerum ipsum dolor eum maiores facere eligendi voluptatem, mollitia exercitationem! Quisquam amet, accusamus est dolor sed eaque ipsum laborum non veritatis eveniet!'
        ]);
        Artikel::create([
            'judul'=>'Siswa solat tarawih',
            'kategori'=>'Sholat',
            'penulis'=>'Asep',
            'isi'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus ipsum reiciendis totam impedit ad, aspernatur adipisci commodi incidunt, cumque saepe, voluptas ut architecto qui quam necessitatibus quibusdam soluta! Sapiente commodi debitis temporibus, voluptatum aut voluptatibus sequi quod, odio rerum ipsum dolor eum maiores facere eligendi voluptatem, mollitia exercitationem! Quisquam amet, accusamus est dolor sed eaque ipsum laborum non veritatis eveniet!'
        ]);
        Artikel::create([
            'judul'=>'Siswa solat Berjamaah',
            'kategori'=>'Sholat',
            'penulis'=>'Restu',
            'isi'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus ipsum reiciendis totam impedit ad, aspernatur adipisci commodi incidunt, cumque saepe, voluptas ut architecto qui quam necessitatibus quibusdam soluta! Sapiente commodi debitis temporibus, voluptatum aut voluptatibus sequi quod, odio rerum ipsum dolor eum maiores facere eligendi voluptatem, mollitia exercitationem! Quisquam amet, accusamus est dolor sed eaque ipsum laborum non veritatis eveniet!'
        ]);
        Galeri::create([
            'judul'=>'Siswa solat ',
            'gambar'=>'Sholat.jpg'
        ]);
        Galeri::create([
            'judul'=>'Siswa ngaji',
            'gambar'=>'Ngaji.jpg'
        ]);
    }
}
