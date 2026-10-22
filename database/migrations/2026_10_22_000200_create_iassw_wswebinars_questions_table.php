<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wswebinars_questions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('id');
            $table->dateTime('time')->nullable();
            $table->tinyText('name');
            $table->string('email', 150);
            $table->text('question');
            $table->integer('webinar_id');
            $table->unsignedInteger('asked_by')->nullable();
            $table->text('answer')->nullable();
            $table->unsignedInteger('answered_by')->nullable();
            $table->dateTime('answered_at')->nullable();
            $table->unsignedInteger('is_private')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wswebinars_questions');
    }
};
