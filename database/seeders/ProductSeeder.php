<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'nama' => "Home Guard 1.0",
            'slug' => "home-guard-1-0",
            'category_id' => 1,
            'harga' => 1500000,
            'stok' => 100,
            'deskripsi' => "Alat ini memilii dua fungsi utama, yaitu sebagai kontroler Home Automation dan mengukur konsumsi dan kualitas listrik di rumah anda.
            Beberapa fitur dari alat ini adalah :
            
            Mematikan/menyalakan lampu atau alat elektronik lainnya via browser smartphone/gadget anda, hanya dalam satu genggaman.
            Dapat mengendalikan maksimal 8 lampu atau alat elektronik lainnya
            Tampilan di browser (interface) yang sangat user friendly dengan tampilan yang ringkas
            Dapat merubah nama ruangan sesuai kebutuhan anda melalui browser app
            Dapat melihat nilai tegangan, arus, dan power factor (kualitas daya) secara realtime. Tertampil pada LCD device dan juga interface pada browser anda
            Mengetahui jumlah pemakaian listrik di rumah anda, bulan berjalan ataupun bulan sebelumnya
            Yang akan anda dapatkan dalam satu paket ini :
            
            Satu pack home automation & energy meter
            Adaptor DC (Device Charger)
            Guideline book
            Garansi 1 bulan
            Gratis instalasi (khusus area Balikpapan)
            Tunggu apa lagi?
            
            Lets control our home with smartphone!",
            'berat' => "0.5 kg",
            'ukuran' => "20 x 20 x 13 cm",
        ]);
    }
}
