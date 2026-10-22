<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_login_history', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_history_id');
            $table->integer('arm_user_id');
            $table->string('arm_logged_in_ip', 255);
            $table->dateTime('arm_logged_in_date');
            $table->dateTime('arm_logout_date');
            $table->time('arm_login_duration');
            $table->string('arm_history_browser', 255);
            $table->string('arm_history_session', 255);
            $table->string('arm_login_country', 255);
            $table->integer('arm_user_current_status')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_login_history');
    }
};
