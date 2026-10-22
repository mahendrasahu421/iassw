<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_shipping_zones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('zone_id');
            $table->string('zone_name', 200);
            $table->unsignedBigInteger('zone_order');

            $table->primary(['zone_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_shipping_zones');
    }
};
