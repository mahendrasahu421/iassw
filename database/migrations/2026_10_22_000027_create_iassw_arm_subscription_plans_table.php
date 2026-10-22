<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_subscription_plans', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_subscription_plan_id');
            $table->string('arm_subscription_plan_name', 255);
            $table->text('arm_subscription_plan_description')->nullable();
            $table->string('arm_subscription_plan_type', 50);
            $table->longText('arm_subscription_plan_options')->nullable();
            $table->double('arm_subscription_plan_amount')->default(0);
            $table->integer('arm_subscription_plan_status')->default(1);
            $table->string('arm_subscription_plan_role', 100)->nullable();
            $table->bigInteger('arm_subscription_plan_post_id')->default(0);
            $table->integer('arm_subscription_plan_gift_status')->default(0);
            $table->integer('arm_subscription_plan_is_delete')->default(0);
            $table->dateTime('arm_subscription_plan_created_date')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_subscription_plans');
    }
};
