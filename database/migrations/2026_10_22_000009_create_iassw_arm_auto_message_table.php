<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_auto_message', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_message_id');
            $table->string('arm_message_type', 50);
            $table->integer('arm_message_period_unit')->nullable();
            $table->string('arm_message_period_type', 50)->nullable();
            $table->string('arm_message_subscription', 255);
            $table->text('arm_message_subject');
            $table->longText('arm_message_content');
            $table->integer('arm_message_status')->default(1);
            $table->integer('arm_message_send_copy_to_admin')->default(0);
            $table->integer('arm_message_send_diff_msg_to_admin')->default(0);
            $table->longText('arm_message_admin_message')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_auto_message');
    }
};
