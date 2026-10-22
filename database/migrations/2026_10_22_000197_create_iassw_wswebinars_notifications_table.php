<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wswebinars_notifications', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->unsignedInteger('attendee_id');
            $table->integer('notification_type');
            $table->timestamp('sent_at')->useCurrent();
            $table->integer('webinar_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wswebinars_notifications');
    }
};
