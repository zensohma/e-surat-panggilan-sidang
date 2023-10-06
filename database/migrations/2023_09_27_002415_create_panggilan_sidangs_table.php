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
        Schema::create('panggilan_sidangs', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat_panggilan');
            $table->string('tgl_surat_panggilan');
            $table->string('panggilan_ke');
            $table->string('tgl_panggilan');
            $table->string('tempat');
            $table->string('sekira_pukul');
            $table->string('alamat');
            $table->string('agenda');
            $table->string('panitera');
            $table->string('panitera_pengganti');
            $table->string('no_telp_panitera');
            $table->string('pemohon');
            $table->string('termohon');
            $table->string('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panggilan_sidangs');
    }
};
