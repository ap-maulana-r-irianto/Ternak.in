<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataperkembanganternakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataperkembanganternak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idkambing');
            $table->foreign('idkambing')->references('id')->on('kambing');
            $table->string('berat');
            $table->date('tanggal');
            $table->string('kondisi');
            $table->string('keterangan');
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
        Schema::dropIfExists('dataperkembanganternak');
    }
}
