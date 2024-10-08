<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemain_database', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemain');
            $table->integer('no_punggung');
            $table->string('posisi');

        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
