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
        Schema::create('sessao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sessaofilme');
            $table->string('nomefun'); 
            $table->string('senhafun'); 
            $table->string('whatsappfun');
            $table->string('cpffun'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessao');
    }
};
