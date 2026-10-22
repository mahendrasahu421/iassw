<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_actionscheduler_actions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('action_id')->autoIncrement();
            $table->string('hook', 191);
            $table->string('status', 20);
            $table->dateTime('scheduled_date_gmt')->nullable();
            $table->dateTime('scheduled_date_local')->nullable();
            $table->string('args', 191)->nullable();
            $table->longText('schedule')->nullable();
            $table->unsignedBigInteger('group_id')->default(0);
            $table->integer('attempts')->default(0);
            $table->dateTime('last_attempt_gmt')->nullable();
            $table->dateTime('last_attempt_local')->nullable();
            $table->unsignedBigInteger('claim_id')->default(0);
            $table->string('extended_args', 8000)->nullable();
            $table->unsignedTinyInteger('priority')->default(10);

            $table->index(['hook'], 'hook');
            $table->index(['status'], 'status');
            $table->index(['scheduled_date_gmt'], 'scheduled_date_gmt');
            $table->index(['args'], 'args');
            $table->index(['group_id'], 'group_id');
            $table->index(['last_attempt_gmt'], 'last_attempt_gmt');
            $table->index(['claim_id', 'status', 'scheduled_date_gmt'], 'claim_id_status_scheduled_date_gmt');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_actionscheduler_actions');
    }
};
