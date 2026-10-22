<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_form', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedMediumInteger('id')->autoIncrement();
            $table->string('title', 150);
            $table->dateTime('date_created');
            $table->dateTime('date_updated')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('is_trash')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_form');
    }
};
