<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_activity', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_activity_id');
            $table->bigInteger('arm_user_id')->default(0);
            $table->string('arm_type', 50);
            $table->string('arm_action', 50);
            $table->longText('arm_content');
            $table->bigInteger('arm_item_id')->default(0);
            $table->bigInteger('arm_paid_post_id')->default(0);
            $table->bigInteger('arm_gift_plan_id')->default(0);
            $table->string('arm_link', 255)->nullable();
            $table->string('arm_activity_plan_name', 255)->nullable();
            $table->string('arm_activity_plan_type', 255)->nullable();
            $table->string('arm_activity_payment_gateway', 255)->nullable();
            $table->double('arm_activity_plan_amount')->default(0);
            $table->dateTime('arm_activity_plan_start_date')->default('1970-01-01 00:00:00');
            $table->dateTime('arm_activity_plan_end_date')->nullable()->default('1970-01-01 00:00:00');
            $table->dateTime('arm_activity_plan_next_cycle_date')->nullable()->default('1970-01-01 00:00:00');
            $table->string('arm_ip_address', 50);
            $table->dateTime('arm_date_recorded')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_activity');
    }
};
