<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->increments('tamu_id');
            $table->string('tamu_nama')->nullable();
            $table->string('tamu_organisasi')->nullable();
            $table->string('tamu_keluarga')->nullable();
            $table->string('tamu_nohp')->nullable();
            $table->string('tamu_uniquecode')->unique();
            $table->string('tamu_qr')->nullable();
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
        //
    }
};
