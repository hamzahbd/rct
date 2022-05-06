<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("slug")->unique();
            $table->longText("deskripsi");
            $table->integer("harga");
            $table->integer("stok");
            $table->string("berat");
            $table->string("ukuran");
            $table->string("image")->nullable();
            $table->foreignId("category_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
