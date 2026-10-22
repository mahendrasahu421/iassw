<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_attribute_taxonomies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('attribute_id');
            $table->string('attribute_name', 200);
            $table->string('attribute_label', 200)->nullable();
            $table->string('attribute_type', 20);
            $table->string('attribute_orderby', 20);
            $table->integer('attribute_public')->default(1);

            $table->primary(['attribute_id']);
            $table->rawIndex('`attribute_name`(20)', 'attribute_name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_attribute_taxonomies');
    }
};
