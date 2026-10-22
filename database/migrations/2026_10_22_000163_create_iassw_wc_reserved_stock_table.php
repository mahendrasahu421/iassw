<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_reserved_stock', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('order_id');
            $table->bigInteger('product_id');
            $table->double('stock_quantity')->default(0);
            $table->dateTime('timestamp')->nullable();
            $table->dateTime('expires')->nullable();

            $table->primary(['order_id', 'product_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_reserved_stock');
    }
};
