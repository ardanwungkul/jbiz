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
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('nama_domain')->unique();
            $table->string('epp_code');
            $table->text('keterangan_domain');
            $table->string('lokasi_domain');
            $table->date('tanggal_mulai');
            $table->date('tanggal_expired');
            $table->string('status_domain');
            $table->string('hosting');
            $table->integer('kapasitas_hosting');
            $table->date('tanggal_hosting');
            $table->string('lokasi_hosting');
            $table->string('paket_website');
            $table->integer('jumlah_email');
            $table->string('slug');
            $table->string('hidden_epp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
