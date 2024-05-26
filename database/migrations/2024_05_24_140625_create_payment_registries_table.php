<?php

use Domain\Product\Models\TgTarif;
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
        Schema::create('payment_registries', function (Blueprint $table) {
            $table->uuid('invoice_payload')->primary();
            $table->string('telegram_id');
            $table->integer('total_amount');
            $table->text('description')->nullable();
            $table->foreignIdFor(TgTarif::class)
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->nullOnDelete();
            $table->boolean('status')->default(false);
            $table->string('telegram_payment_charge_id')->nullable();
            $table->string('provider_payment_charge_id')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_registries');
    }
};