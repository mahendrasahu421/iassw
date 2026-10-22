<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_workflows_queue', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('id');
            $table->bigInteger('workflow_id')->nullable();
            $table->integer('failed')->default(0);
            $table->integer('failure_code')->default(0);
            $table->longText('meta');
            $table->dateTime('scheduled_at')->nullable();
            $table->dateTime('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_workflows_queue');
    }
};
