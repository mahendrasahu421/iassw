<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_form_field', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_form_field_id');
            $table->integer('arm_form_field_form_id');
            $table->integer('arm_form_field_order')->default(0);
            $table->string('arm_form_field_slug', 255)->nullable();
            $table->longText('arm_form_field_option')->nullable();
            $table->integer('arm_form_field_bp_field_id')->default(0);
            $table->integer('arm_form_field_status')->default(1);
            $table->dateTime('arm_form_field_created_date')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_form_field');
    }
};
