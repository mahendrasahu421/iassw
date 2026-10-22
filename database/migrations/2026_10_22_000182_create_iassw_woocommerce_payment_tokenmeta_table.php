<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_payment_tokenmeta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('meta_id');
            $table->unsignedBigInteger('payment_token_id');
            $table->string('meta_key', 255)->nullable();
            $table->longText('meta_value')->nullable();

            $table->primary(['meta_id']);
            $table->index(['payment_token_id'], 'payment_token_id');
            $table->rawIndex('`meta_key`(32)', 'meta_key');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_payment_tokenmeta');
    }
};
