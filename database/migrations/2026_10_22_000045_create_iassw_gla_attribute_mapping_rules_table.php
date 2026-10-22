<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gla_attribute_mapping_rules', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('id');
            $table->string('attribute', 255);
            $table->string('source', 100);
            $table->string('category_condition_type', 10);
            $table->text('categories')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gla_attribute_mapping_rules');
    }
};
