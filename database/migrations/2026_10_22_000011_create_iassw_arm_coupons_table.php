<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_coupons', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_coupon_id');
            $table->string('arm_coupon_code', 255);
            $table->string('arm_coupon_label', 255)->nullable();
            $table->double('arm_coupon_discount')->default(0);
            $table->string('arm_coupon_discount_type', 50);
            $table->string('arm_coupon_period_type', 50);
            $table->boolean('arm_coupon_on_each_subscriptions')->nullable()->default(0);
            $table->dateTime('arm_coupon_start_date');
            $table->dateTime('arm_coupon_expire_date');
            $table->boolean('arm_coupon_type')->nullable()->default(0);
            $table->text('arm_coupon_subscription')->nullable();
            $table->text('arm_coupon_paid_posts')->nullable();
            $table->integer('arm_coupon_allow_trial')->default(0);
            $table->integer('arm_coupon_allowed_uses')->default(0);
            $table->integer('arm_coupon_used')->default(0);
            $table->integer('arm_coupon_status')->default(1);
            $table->dateTime('arm_coupon_added_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_coupons');
    }
};
