<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_order_tax_lookup', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('tax_rate_id');
            $table->dateTime('date_created')->nullable();
            $table->double('shipping_tax')->default(0);
            $table->double('order_tax')->default(0);
            $table->double('total_tax')->default(0);

            $table->primary(['order_id', 'tax_rate_id']);
            $table->index(['tax_rate_id'], 'tax_rate_id');
            $table->index(['date_created'], 'date_created');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_order_tax_lookup');
    }
};
