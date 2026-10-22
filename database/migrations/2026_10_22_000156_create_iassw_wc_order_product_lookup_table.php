<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_order_product_lookup', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('order_item_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('variation_id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->dateTime('date_created')->nullable();
            $table->integer('product_qty');
            $table->double('product_net_revenue')->default(0);
            $table->double('product_gross_revenue')->default(0);
            $table->double('coupon_amount')->default(0);
            $table->double('tax_amount')->default(0);
            $table->double('shipping_amount')->default(0);
            $table->double('shipping_tax_amount')->default(0);

            $table->primary(['order_item_id']);
            $table->index(['order_id'], 'order_id');
            $table->index(['product_id'], 'product_id');
            $table->index(['customer_id'], 'customer_id');
            $table->index(['date_created'], 'date_created');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_order_product_lookup');
    }
};
