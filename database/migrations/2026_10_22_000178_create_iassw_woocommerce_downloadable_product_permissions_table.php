<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_downloadable_product_permissions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('permission_id');
            $table->string('download_id', 36);
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('order_id')->default(0);
            $table->string('order_key', 200);
            $table->string('user_email', 200);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('downloads_remaining', 9)->nullable();
            $table->dateTime('access_granted')->nullable();
            $table->dateTime('access_expires')->nullable();
            $table->unsignedBigInteger('download_count')->default(0);

            $table->primary(['permission_id']);
            $table->rawIndex('`product_id`, `order_id`, `order_key`(16), `download_id`', 'download_order_key_product');
            $table->index(['download_id', 'order_id', 'product_id'], 'download_order_product');
            $table->index(['order_id'], 'order_id');
            $table->index(['user_id', 'order_id', 'downloads_remaining', 'access_expires'], 'user_order_remaining_expires');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_downloadable_product_permissions');
    }
};
