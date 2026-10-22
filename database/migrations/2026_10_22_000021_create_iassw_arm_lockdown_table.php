<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_lockdown', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('arm_lockdown_ID');
            $table->bigInteger('arm_user_id');
            $table->dateTime('arm_lockdown_date')->default('1970-01-01 00:00:00');
            $table->dateTime('arm_release_date')->default('1970-01-01 00:00:00');
            $table->string('arm_lockdown_IP', 255)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_lockdown');
    }
};
