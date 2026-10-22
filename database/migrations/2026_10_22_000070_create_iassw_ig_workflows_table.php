<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_workflows', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->string('name', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->string('trigger_name', 250);
            $table->longText('trigger_options');
            $table->longText('rules');
            $table->longText('actions');
            $table->tinyInteger('status');
            $table->tinyInteger('type');
            $table->integer('priority')->nullable()->default(0);
            $table->longText('meta');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_workflows');
    }
};
