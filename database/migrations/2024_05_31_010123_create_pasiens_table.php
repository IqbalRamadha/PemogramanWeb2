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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string("kode");
            $table->string("nama");
            $table->string("tempat_lahir");
            $table->string("tanggal_lahir");
            $table->string("jenis_kelamin");
            $table->string("email");
            $table->string("alamat");
            $table->string("kelurahan_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
