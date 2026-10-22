<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_entry_meta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedMediumInteger('form_id')->default(0);
            $table->unsignedBigInteger('entry_id');
            $table->string('meta_key', 255)->nullable();
            $table->longText('meta_value')->nullable();
            $table->string('item_index', 60)->nullable();

            $table->rawIndex('`meta_key`(191)', 'meta_key');
            $table->index(['entry_id'], 'entry_id');
            $table->rawIndex('`meta_value`(191)', 'meta_value');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_entry_meta');
    }
};
