<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_form_meta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedMediumInteger('form_id');
            $table->longText('display_meta')->nullable();
            $table->longText('entries_grid_meta')->nullable();
            $table->longText('confirmations')->nullable();
            $table->longText('notifications')->nullable();

            $table->primary(['form_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_form_meta');
    }
};
