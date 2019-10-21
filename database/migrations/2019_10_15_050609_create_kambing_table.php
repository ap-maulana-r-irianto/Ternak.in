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
            $table->string('idkambing')->unique();
            $table->date('tgllahir');
            $table->string('berat');
            $table->string('jeniskelamin');
            $table->string('harga');
            $table->string('jeniskambing');
            $table->unsignedBigInteger('idpeternak');
            $table->foreign('idpeternak')->references('id')->on('peternak');
            $table->string('fotokambing');
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
