<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_newsletter_emails', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->string('language', 10)->default('');
            $table->string('subject', 255)->default('');
            $table->longText('message')->nullable();
            $table->timestamp('created')->useCurrent();
            $table->enum('status', ['new', 'sending', 'sent', 'paused', 'error'])->default('new');
            $table->integer('total')->default(0);
            $table->integer('last_id')->default(0);
            $table->integer('sent')->default(0);
            $table->integer('track')->default(1);
            $table->integer('list')->default(0);
            $table->string('type', 50)->default('');
            $table->longText('query')->nullable();
            $table->tinyInteger('editor')->default(0);
            $table->string('sex', 20)->default('');
            $table->string('theme', 50)->default('');
            $table->longText('message_text')->nullable();
            $table->longText('preferences')->nullable();
            $table->integer('send_on')->default(0);
            $table->string('token', 10)->default('');
            $table->longText('options')->nullable();
            $table->boolean('private')->default(0);
            $table->unsignedInteger('click_count')->default(0);
            $table->string('version', 10)->default('');
            $table->unsignedInteger('open_count')->default(0);
            $table->unsignedInteger('unsub_count')->default(0);
            $table->unsignedInteger('error_count')->default(0);
            $table->unsignedInteger('stats_time')->default(0);
            $table->unsignedInteger('updated')->default(0);

            $table->primary(['id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_newsletter_emails');
    }
};
