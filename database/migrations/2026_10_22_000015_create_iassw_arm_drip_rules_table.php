<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_drip_rules', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('arm_rule_id');
            $table->unsignedBigInteger('arm_item_id')->default(0);
            $table->string('arm_item_type', 50)->nullable();
            $table->string('arm_rule_type', 50)->nullable();
            $table->integer('arm_show_old_items')->default(0);
            $table->longText('arm_rule_options')->nullable();
            $table->text('arm_rule_plans')->nullable();
            $table->integer('arm_rule_status')->default(1);
            $table->dateTime('arm_created_date')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_drip_rules');
    }
};
