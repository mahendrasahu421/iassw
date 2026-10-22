<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_tax_rate_locations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('location_id');
            $table->string('location_code', 200);
            $table->unsignedBigInteger('tax_rate_id');
            $table->string('location_type', 40);

            $table->primary(['location_id']);
            $table->index(['tax_rate_id'], 'tax_rate_id');
            $table->rawIndex('`location_type`(10), `location_code`(20)', 'location_type_code');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_tax_rate_locations');
    }
};
