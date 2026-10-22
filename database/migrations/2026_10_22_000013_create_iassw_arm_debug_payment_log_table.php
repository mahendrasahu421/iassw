<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_debug_payment_log', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_payment_log_id');
            $table->integer('arm_payment_log_ref_id')->default(0);
            $table->string('arm_payment_log_gateway', 255)->nullable();
            $table->string('arm_payment_log_event', 255)->nullable();
            $table->string('arm_payment_log_event_from', 255)->nullable();
            $table->boolean('arm_payment_log_status')->nullable()->default(1);
            $table->text('arm_payment_log_raw_data')->nullable();
            $table->dateTime('arm_payment_log_added_date')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_debug_payment_log');
    }
};
