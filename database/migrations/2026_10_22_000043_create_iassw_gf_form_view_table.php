<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_form_view', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedMediumInteger('form_id');
            $table->dateTime('date_created');
            $table->char('ip', 15)->nullable();
            $table->unsignedMediumInteger('count')->default(1);

            $table->index(['date_created'], 'date_created');
            $table->index(['form_id'], 'form_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_form_view');
    }
};
