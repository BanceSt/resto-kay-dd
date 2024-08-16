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
        Schema::create('command_produits', function (Blueprint $table) {
            $table->unsignedBigInteger('produit_id');
            $table->unsignedBigInteger('command_id');
            $table->integer("menu");

            $table->foreign('produit_id')->references('id')->on('produits');
            $table->foreign('command_id')->references('id')->on('commands');

            $table->primary(['produit_id', 'command_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('command_produits');
    }
};
