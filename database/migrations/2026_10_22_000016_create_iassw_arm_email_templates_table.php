<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_email_templates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_template_id');
            $table->string('arm_template_name', 255);
            $table->string('arm_template_slug', 255);
            $table->string('arm_template_subject', 255);
            $table->longText('arm_template_content');
            $table->integer('arm_template_status')->default(1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_email_templates');
    }
};
