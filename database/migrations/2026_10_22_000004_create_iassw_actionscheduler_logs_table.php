<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_actionscheduler_logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('log_id')->autoIncrement();
            $table->unsignedBigInteger('action_id');
            $table->text('message');
            $table->dateTime('log_date_gmt')->nullable();
            $table->dateTime('log_date_local')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_actionscheduler_logs');
    }
};
