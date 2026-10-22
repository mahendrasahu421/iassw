<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_fail_attempts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('arm_fail_attempts_id');
            $table->bigInteger('arm_user_id');
            $table->text('arm_fail_attempts_detail')->nullable();
            $table->string('arm_fail_attempts_ip', 200)->nullable();
            $table->integer('arm_is_block')->default(0);
            $table->dateTime('arm_fail_attempts_datetime')->default('1970-01-01 00:00:00');
            $table->dateTime('arm_fail_attempts_release_datetime')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_fail_attempts');
    }
};
