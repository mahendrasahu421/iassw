<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_product_attributes_lookup', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('product_id');
            $table->bigInteger('product_or_parent_id');
            $table->string('taxonomy', 32);
            $table->bigInteger('term_id');
            $table->boolean('is_variation_attribute');
            $table->boolean('in_stock');

            $table->primary(['product_or_parent_id', 'term_id', 'product_id', 'taxonomy']);
            $table->index(['is_variation_attribute', 'term_id'], 'is_variation_attribute_term_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_product_attributes_lookup');
    }
};
