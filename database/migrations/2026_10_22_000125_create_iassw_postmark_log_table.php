<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_postmark_log', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->dateTime('log_entry_date')->nullable();
            $table->text('fromaddress')->nullable();
            $table->text('toaddress')->nullable();
            $table->text('subject')->nullable();
            $table->text('response')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_postmark_log');
    }
};
