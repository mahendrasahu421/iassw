<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_forms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_form_id');
            $table->string('arm_form_label', 255)->nullable();
            $table->string('arm_form_title', 255)->nullable();
            $table->string('arm_form_type', 100)->nullable();
            $table->string('arm_form_slug', 255)->nullable();
            $table->integer('arm_is_default')->default(0);
            $table->string('arm_set_name', 255)->nullable();
            $table->integer('arm_set_id')->default(0);
            $table->integer('arm_is_template')->default(0);
            $table->integer('arm_ref_template')->default(0);
            $table->longText('arm_form_settings')->nullable();
            $table->dateTime('arm_form_updated_date')->default('1970-01-01 00:00:00');
            $table->dateTime('arm_form_created_date')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_forms');
    }
};
