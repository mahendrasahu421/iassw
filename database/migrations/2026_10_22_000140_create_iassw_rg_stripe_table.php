<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_rg_stripe', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedMediumInteger('form_id');
            $table->longText('form_settings')->nullable();
            $table->longText('rules')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_rg_stripe');
    }
};
