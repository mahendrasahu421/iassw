<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wpie_template', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->string('status', 25)->nullable();
            $table->string('opration', 100);
            $table->string('username', 60);
            $table->string('unique_id', 100);
            $table->string('opration_type', 100);
            $table->longText('options')->nullable();
            $table->string('process_log', 255)->nullable();
            $table->integer('process_lock')->nullable();
            $table->dateTime('create_date');
            $table->dateTime('last_update_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wpie_template');
    }
};
