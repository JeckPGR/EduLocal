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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->String('Nama');
            $table->String('Tipe');
            $table->int32('NomorTelpon');
            $table->String('Alamat');
            $table->String('Lokasi');
            $table->String('foto')->nullable();
            $table->text('small_description');
            $table->longtext('long_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
