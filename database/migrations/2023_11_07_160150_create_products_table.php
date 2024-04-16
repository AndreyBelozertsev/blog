<?php

use Domain\Product\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->text('images')->nullable();
            $table->integer('price');
            $table->text('description')->nullable();
            $table->foreignIdFor(Category::class)
                    ->nullable()
                    ->constrained()
                    ->onUpdate('cascade')
                    ->nullOnDelete('cascade');
            $table->boolean('status')->default(true);
            $table->integer('sort')->default(500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
