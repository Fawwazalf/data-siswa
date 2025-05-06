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
        Schema::create('nisns', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->timestamps();
            
            $table->foreignId('siswa_id')->unique()->constrained('siswas')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nisns');
    }
};
