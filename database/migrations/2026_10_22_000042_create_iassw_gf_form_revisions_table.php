<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_form_revisions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedMediumInteger('form_id');
            $table->longText('display_meta')->nullable();
            $table->dateTime('date_created');

            $table->index(['date_created'], 'date_created');
            $table->index(['form_id'], 'form_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_form_revisions');
    }
};
