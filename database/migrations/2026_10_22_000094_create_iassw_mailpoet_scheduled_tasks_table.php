<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_scheduled_tasks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->string('type', 90)->nullable();
            $table->string('status', 12)->nullable();
            $table->mediumInteger('priority')->default(0);
            $table->timestamp('scheduled_at')->nullable();
            $table->timestamp('processed_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('in_progress')->nullable();
            $table->integer('reschedule_count')->default(0);
            $table->longText('meta')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_scheduled_tasks');
    }
};
