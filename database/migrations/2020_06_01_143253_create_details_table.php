<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_order'); //FIELD INI AKAN MERUJUK KE TABLE orders
            $table->unsignedBigInteger('id_produk'); //FIELD INI AKAN MERUJUK KE TABLE products
            $table->integer('harga'); //INI SAMA DENGAN CUSTOMER, INFORMASI HARGA SAAT BARANG INI DIPESAN JUGA DIBUAT SALINNANNYA
            $table->integer('jumlah');
            $table->integer('berat'); //JUGA BERLAKU DENGAN BERAT BARANG, UNTUK MENGHINDARI PERUBAHAN DATA PRODUK
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
        Schema::dropIfExists('details');
    }
}