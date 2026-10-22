<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_member_templates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_id');
            $table->text('arm_title')->nullable();
            $table->string('arm_slug', 255)->nullable();
            $table->string('arm_type', 50)->nullable();
            $table->integer('arm_default')->default(0);
            $table->text('arm_subscription_plan')->nullable();
            $table->integer('arm_core')->default(0);
            $table->longText('arm_template_html')->nullable();
            $table->integer('arm_ref_template')->default(0);
            $table->longText('arm_options')->nullable();
            $table->longText('arm_html_before_fields')->nullable();
            $table->longText('arm_html_after_fields')->nullable();
            $table->integer('arm_enable_admin_profile')->default(0);
            $table->dateTime('arm_created_date')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_member_templates');
    }
};
