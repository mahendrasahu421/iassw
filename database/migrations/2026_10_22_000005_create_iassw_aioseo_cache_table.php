<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_aioseo_cache', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('id');
            $table->string('key', 80);
            $table->longText('value');
            $table->dateTime('expiration')->nullable();
            $table->dateTime('created');
            $table->dateTime('updated');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_aioseo_cache');
    }
};
