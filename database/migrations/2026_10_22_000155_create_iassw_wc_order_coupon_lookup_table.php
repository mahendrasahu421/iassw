<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_order_coupon_lookup', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('order_id');
            $table->bigInteger('coupon_id');
            $table->dateTime('date_created')->nullable();
            $table->double('discount_amount')->default(0);

            $table->primary(['order_id', 'coupon_id']);
            $table->index(['coupon_id'], 'coupon_id');
            $table->index(['date_created'], 'date_created');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_order_coupon_lookup');
    }
};
