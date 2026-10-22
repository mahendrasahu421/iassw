<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_tax_rates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('tax_rate_id');
            $table->string('tax_rate_country', 2)->default('');
            $table->string('tax_rate_state', 200)->default('');
            $table->string('tax_rate', 8)->default('');
            $table->string('tax_rate_name', 200)->default('');
            $table->unsignedBigInteger('tax_rate_priority');
            $table->integer('tax_rate_compound')->default(0);
            $table->integer('tax_rate_shipping')->default(1);
            $table->unsignedBigInteger('tax_rate_order');
            $table->string('tax_rate_class', 200)->default('');

            $table->primary(['tax_rate_id']);
            $table->index(['tax_rate_country'], 'tax_rate_country');
            $table->rawIndex('`tax_rate_state`(2)', 'tax_rate_state');
            $table->rawIndex('`tax_rate_class`(10)', 'tax_rate_class');
            $table->index(['tax_rate_priority'], 'tax_rate_priority');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_tax_rates');
    }
};
