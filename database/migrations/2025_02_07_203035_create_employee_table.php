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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 18);
            $table->string('nama');
            $table->string('tp_lahir');
            $table->string('alamat');
            $table->date('tg_lahir');
            $table->enum('jenis_kl', ['L', 'P']);
            $table->string('gol', 5);
            $table->enum('eselon', ['I', 'II', 'III', 'IV', 'V']);
            $table->string('jabatan');
            $table->string('tp_tugas');
            $table->string('agama');
            $table->string('unit_kerja');
            $table->string('no_hp', 12);
            $table->string('npwp', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
