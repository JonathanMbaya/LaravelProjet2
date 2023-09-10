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
        Schema::create('nfts', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('title');
            $table->string('artist');
            $table->bigInteger('owner_id')->nullable();
            $table->foreign('owner_id')->references('id')->on('owners')->nullable();
            $table->text('description');
            $table->string('url');
            $table->enum('standard', ['ERC-721', 'ERC-1155',
            'ERC-998']);
            $table->decimal('prix');
            $table->string('image');
            $table->bigInteger('category');
            $table->foreign('category')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfts');
    }
};
