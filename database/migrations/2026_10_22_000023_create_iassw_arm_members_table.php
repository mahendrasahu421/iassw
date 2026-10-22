<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_members', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('arm_member_id');
            $table->unsignedBigInteger('arm_user_id');
            $table->string('arm_user_login', 60)->default('');
            $table->string('arm_user_pass', 64)->default('');
            $table->string('arm_user_nicename', 50)->default('');
            $table->string('arm_user_email', 100)->default('');
            $table->string('arm_user_url', 100)->default('');
            $table->dateTime('arm_user_registered')->default('1970-01-01 00:00:00');
            $table->string('arm_user_activation_key', 60)->default('');
            $table->integer('arm_user_status')->default(0);
            $table->string('arm_display_name', 250)->default('');
            $table->integer('arm_user_type')->default(0);
            $table->integer('arm_primary_status')->default(1);
            $table->integer('arm_secondary_status')->default(0);
            $table->text('arm_user_plan_ids')->nullable();
            $table->text('arm_user_suspended_plan_ids')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_members');
    }
};
