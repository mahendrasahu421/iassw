<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_entries', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('arm_entry_id');
            $table->string('arm_entry_email', 255)->nullable();
            $table->string('arm_name', 255)->nullable();
            $table->longText('arm_description')->nullable();
            $table->text('arm_ip_address')->nullable();
            $table->text('arm_browser_info')->nullable();
            $table->longText('arm_entry_value')->nullable();
            $table->integer('arm_form_id')->nullable();
            $table->bigInteger('arm_user_id')->nullable();
            $table->integer('arm_plan_id')->nullable();
            $table->boolean('arm_is_post_entry')->default(0);
            $table->bigInteger('arm_paid_post_id')->default(0);
            $table->boolean('arm_is_gift_entry')->default(0);
            $table->dateTime('arm_created_date')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_entries');
    }
};
