<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdtransaksiinvestorToKambing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kambing', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('idtransaksiinvestor')->nullable();
            $table->foreign('idtransaksiinvestor')->references('id')->on('transaksiinvestor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kambing', function (Blueprint $table) {
            //
        });
    }
}
