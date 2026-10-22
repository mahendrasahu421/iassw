<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_shipping_zone_methods', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('zone_id');
            $table->unsignedBigInteger('instance_id');
            $table->string('method_id', 200);
            $table->unsignedBigInteger('method_order');
            $table->boolean('is_enabled')->default(1);

            $table->primary(['instance_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_shipping_zone_methods');
    }
};
