<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_debug_general_log', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_general_log_id');
            $table->string('arm_general_log_event', 255)->nullable();
            $table->string('arm_general_log_event_name', 255)->nullable();
            $table->string('arm_general_log_event_from', 255)->nullable();
            $table->text('arm_general_log_raw_data')->nullable();
            $table->dateTime('arm_general_log_added_date')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_debug_general_log');
    }
};
