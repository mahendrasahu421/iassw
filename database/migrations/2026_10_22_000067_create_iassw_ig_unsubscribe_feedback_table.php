<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_unsubscribe_feedback', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->unsignedInteger('contact_id');
            $table->unsignedInteger('list_id');
            $table->unsignedInteger('campaign_id');
            $table->unsignedInteger('mailing_queue_id');
            $table->string('feedback_slug', 50);
            $table->string('feedback_text', 500);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->longText('meta')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_unsubscribe_feedback');
    }
};
