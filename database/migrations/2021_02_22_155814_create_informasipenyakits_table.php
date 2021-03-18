<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasipenyakitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasipenyakits', function (Blueprint $table) {
            $table->increments('idInformasiPenyakit');
            $table->string('namaPenyakit');
            $table->string('definisiPenyakit');
            $table->string('solusiPenyakit');
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
        Schema::dropIfExists('informasipenyakits');
    }
}
