<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_custom_fields', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->string('slug', 100);
            $table->string('label', 100);
            $table->string('type', 50);
            $table->longText('meta')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_custom_fields');
    }
};
