<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKambingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kambing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idkambing');
            $table->string('jeniskambing');
            $table->date('tgllahir');
            $table->string('berat');
            $table->string('jeniskelamin');
            $table->string('harga');
            $table->unsignedBigInteger('idpeternak');
            $table->foreign('idpeternak')->references('id')->on('peternak');
            $table->unsignedBigInteger('idinvestor')->nullable();
            $table->foreign('idinvestor')->references('id')->on('investor');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kambing');
    }
}
