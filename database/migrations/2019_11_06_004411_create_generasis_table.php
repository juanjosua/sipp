<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generasis', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama_pelatihan');

            $table->bigInteger('pelatihan_id')->unsigned()->index()->nullable();
            $table->foreign('pelatihan_id')->references('id')->on('pelatihans');

            $table->bigInteger('pelaporan_id')->unsigned()->index()->nullable();
            $table->foreign('pelaporan_id')->references('id')->on('pelaporans');

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
        Schema::dropIfExists('generasis');
    }
}
