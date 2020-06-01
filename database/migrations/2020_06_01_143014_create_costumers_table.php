<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('email')->unique(); //UNIK UNTUK MENGHINDARI DUPLIKAT DATA
            $table->string('no_telepon');
            $table->string('alamat');
            $table->unsignedBigInteger('id_kecamatan'); //AKAN MERUJUK PADA TABLE districts NANTINYA UNTUK MENGAMBIL DATA KOTA CUSTOMER
            $table->boolean('status')->default(false); //TIPENYA BOOLEAN, DENGAN NILAI DEFAULT ADALAH FALSE
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
        Schema::dropIfExists('costumers');
    }
}