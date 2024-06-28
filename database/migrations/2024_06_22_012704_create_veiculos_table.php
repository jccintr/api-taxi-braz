<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Categoria;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Categoria::class);
            $table->string('modelo')->nullable();
            $table->string('cor')->nullable();
            $table->string('placa')->nullable();
            $table->string('renavan')->nullable();
            $table->string('imagem_doc')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
