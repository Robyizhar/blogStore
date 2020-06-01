<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice')->unique();
            $table->string('customer_id');
          
        
  
            //HAL INI DILAKUKAN, JIKA SUATU SAAT CUSTOMER MENGUBAH PROFILENYA
            //SEHINGGA DATA ORDER TIDAK IKUT BERUBAH, JADI PERLU DISIMPAN INFONYA
            //KETIKA ORDER ITU DIBUAT SEBAGAI SALINAN INFORMASI
            $table->string('nama_costumer');
            $table->string('notelepon_costumer');
            $table->string('alamat_costumer');
            $table->unsignedBigInteger('id_kecamatan'); //MERUJUK KE TABLE districts
            $table->integer('subtotal');
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
        Schema::dropIfExists('orders');
    }
}