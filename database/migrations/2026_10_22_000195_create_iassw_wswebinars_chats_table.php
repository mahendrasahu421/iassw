<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wswebinars_chats', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('id');
            $table->integer('webinar_id');
            $table->unsignedInteger('admin')->default(0);
            $table->unsignedInteger('private')->default(0);
            $table->unsignedInteger('attendee_id');
            $table->text('content');
            $table->dateTime('timestamp');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wswebinars_chats');
    }
};
