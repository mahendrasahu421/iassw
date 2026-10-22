<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_product_meta_lookup', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('product_id');
            $table->string('sku', 100)->nullable()->default('');
            $table->boolean('virtual')->nullable()->default(0);
            $table->boolean('downloadable')->nullable()->default(0);
            $table->decimal('min_price', 19, 4)->nullable();
            $table->decimal('max_price', 19, 4)->nullable();
            $table->boolean('onsale')->nullable()->default(0);
            $table->double('stock_quantity')->nullable();
            $table->string('stock_status', 100)->nullable()->default('instock');
            $table->bigInteger('rating_count')->nullable()->default(0);
            $table->decimal('average_rating', 3, 2)->nullable()->default(0.00);
            $table->bigInteger('total_sales')->nullable()->default(0);
            $table->string('tax_status', 100)->nullable()->default('taxable');
            $table->string('tax_class', 100)->nullable()->default('');

            $table->primary(['product_id']);
            $table->index(['virtual'], 'virtual');
            $table->index(['downloadable'], 'downloadable');
            $table->index(['stock_status'], 'stock_status');
            $table->index(['stock_quantity'], 'stock_quantity');
            $table->index(['onsale'], 'onsale');
            $table->index(['min_price', 'max_price'], 'min_max_price');
            $table->rawIndex('`sku`(50)', 'sku');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_product_meta_lookup');
    }
};
