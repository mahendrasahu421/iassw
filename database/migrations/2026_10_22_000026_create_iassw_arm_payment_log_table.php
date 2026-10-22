<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_payment_log', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_log_id');
            $table->integer('arm_invoice_id')->default(0);
            $table->bigInteger('arm_user_id')->default(0);
            $table->string('arm_first_name', 255)->nullable();
            $table->string('arm_last_name', 255)->nullable();
            $table->bigInteger('arm_plan_id')->default(0);
            $table->bigInteger('arm_old_plan_id')->default(0);
            $table->string('arm_payment_gateway', 50);
            $table->string('arm_payment_type', 50);
            $table->text('arm_token')->nullable();
            $table->string('arm_payer_email', 255)->nullable();
            $table->string('arm_receiver_email', 255)->nullable();
            $table->text('arm_transaction_id')->nullable();
            $table->string('arm_transaction_payment_type', 100)->nullable();
            $table->text('arm_transaction_status')->nullable();
            $table->dateTime('arm_payment_date')->default('1970-01-01 00:00:00');
            $table->string('arm_payment_mode', 255)->nullable();
            $table->integer('arm_payment_cycle')->default(0);
            $table->string('arm_bank_name', 255)->nullable();
            $table->string('arm_account_name', 255)->nullable();
            $table->longText('arm_additional_info')->nullable();
            $table->string('arm_payment_transfer_mode', 255)->nullable();
            $table->double('arm_amount')->default(0);
            $table->string('arm_currency', 50)->nullable();
            $table->longText('arm_extra_vars')->nullable();
            $table->longText('arm_response_text')->nullable();
            $table->string('arm_coupon_code', 255)->nullable();
            $table->double('arm_coupon_discount')->default(0);
            $table->string('arm_coupon_discount_type', 50)->nullable();
            $table->boolean('arm_coupon_on_each_subscriptions')->nullable()->default(0);
            $table->boolean('arm_is_post_payment')->default(0);
            $table->bigInteger('arm_paid_post_id')->default(0);
            $table->boolean('arm_is_gift_payment')->default(0);
            $table->integer('arm_is_trial')->default(0);
            $table->integer('arm_display_log')->default(1);
            $table->dateTime('arm_created_date')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_payment_log');
    }
};
