<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_arm_membership_setup', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('arm_setup_id');
            $table->string('arm_setup_name', 255);
            $table->boolean('arm_setup_type')->default(0);
            $table->longText('arm_setup_modules')->nullable();
            $table->longText('arm_setup_labels')->nullable();
            $table->integer('arm_status')->default(1);
            $table->dateTime('arm_created_date')->default('1970-01-01 00:00:00');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_arm_membership_setup');
    }
};
