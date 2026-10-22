<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wsal_metadata', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('id');
            $table->bigInteger('occurrence_id');
            $table->string('name', 100);
            $table->longText('value');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wsal_metadata');
    }
};
