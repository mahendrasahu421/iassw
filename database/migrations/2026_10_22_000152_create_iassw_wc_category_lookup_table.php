<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_category_lookup', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('category_tree_id');
            $table->unsignedBigInteger('category_id');

            $table->primary(['category_tree_id', 'category_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_category_lookup');
    }
};
