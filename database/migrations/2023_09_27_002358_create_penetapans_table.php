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
        Schema::create('penetapans', function (Blueprint $table) {
            $table->id();
            $table->string('penetapan');
            $table->string('ketua_mk');
            $table->string('anggota_mk1');
            $table->string('anggota_mk2');
            $table->string('mediator');
            $table->string('panitera_pengganti');
            $table->string('nip_panitera_pengganti');
            $table->string('pangkat_panitera_pengganti');
            $table->string('jabatan_panitera_pengganti');
            $table->string('no_hp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penetapans');
    }
};
