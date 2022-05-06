<?php

namespace Database\Seeders;

use App\Models\CartDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CartDetail::create([
            'product_id' => 1,
            'cart_id' => 1,
            'jumlah' => 1,
        ]);
    }
}
