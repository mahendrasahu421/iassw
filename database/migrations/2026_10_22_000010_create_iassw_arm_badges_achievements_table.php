<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_badges_achievements', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_badges_id');
            $table->integer('arm_badges_parent')->default(0);
            $table->string('arm_badges_name', 255)->nullable();
            $table->string('arm_badges_type', 50)->nullable();
            $table->text('arm_badges_icon')->nullable();
            $table->longText('arm_badges_achievement')->nullable();
            $table->string('arm_badges_achievement_type', 50)->nullable();
            $table->string('arm_badges_tooltip', 255)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_badges_achievements');
    }
};
