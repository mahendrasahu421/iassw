<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_order_stats', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->dateTime('date_created')->nullable();
            $table->dateTime('date_created_gmt')->nullable();
            $table->dateTime('date_paid')->nullable();
            $table->dateTime('date_completed')->nullable();
            $table->integer('num_items_sold')->default(0);
            $table->double('total_sales')->default(0);
            $table->double('tax_total')->default(0);
            $table->double('shipping_total')->default(0);
            $table->double('net_total')->default(0);
            $table->boolean('returning_customer')->nullable();
            $table->string('status', 200);
            $table->unsignedBigInteger('customer_id');

            $table->primary(['order_id']);
            $table->index(['date_created'], 'date_created');
            $table->index(['customer_id'], 'customer_id');
            $table->rawIndex('`status`(191)', 'status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_order_stats');
    }
};
