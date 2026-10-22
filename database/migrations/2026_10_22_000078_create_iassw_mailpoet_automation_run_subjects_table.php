<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_automation_run_subjects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->unsignedInteger('automation_run_id');
            $table->string('key', 191)->nullable();
            $table->longText('args')->nullable();
            $table->string('hash', 191)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_automation_run_subjects');
    }
};
