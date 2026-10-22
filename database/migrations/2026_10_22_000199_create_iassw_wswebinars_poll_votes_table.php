<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wswebinars_poll_votes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->integer('poll_id');
            $table->integer('webinar_id');
            $table->integer('attendee_id');
            $table->timestamp('created_at')->useCurrent();
            $table->string('question_id', 64);
            $table->string('answer_id', 64);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wswebinars_poll_votes');
    }
};
