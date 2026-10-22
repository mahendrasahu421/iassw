<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_order_items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('order_item_id');
            $table->text('order_item_name');
            $table->string('order_item_type', 200)->default('');
            $table->unsignedBigInteger('order_id');

            $table->primary(['order_item_id']);
            $table->index(['order_id'], 'order_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_order_items');
    }
};
