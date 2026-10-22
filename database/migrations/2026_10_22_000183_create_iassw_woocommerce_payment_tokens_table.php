<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_payment_tokens', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('token_id');
            $table->string('gateway_id', 200);
            $table->text('token');
            $table->unsignedBigInteger('user_id')->default(0);
            $table->string('type', 200);
            $table->boolean('is_default')->default(0);

            $table->primary(['token_id']);
            $table->index(['user_id'], 'user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_payment_tokens');
    }
};
