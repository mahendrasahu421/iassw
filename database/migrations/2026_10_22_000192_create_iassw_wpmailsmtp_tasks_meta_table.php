<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wpmailsmtp_tasks_meta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('id');
            $table->string('action', 255);
            $table->longText('data');
            $table->dateTime('date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wpmailsmtp_tasks_meta');
    }
};
