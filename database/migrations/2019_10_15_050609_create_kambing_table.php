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
            $table->unsignedBigInteger('idinvestor')->nullable();
            $table->foreign('idinvestor')->references('id')->on('investor');
            $table->unsignedBigInteger('idpembeli')->nullable();
            $table->foreign('idpembeli')->references('id')->on('pembeli');
            $table->string('fotokambing');
            $table->boolean('statuspersetujuan1')->nullable();
            $table->boolean('statuspersetujuan2')->nullable();
            $table->boolean('permintaan1')->nullable();
            $table->boolean('permintaan2')->nullable();
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
