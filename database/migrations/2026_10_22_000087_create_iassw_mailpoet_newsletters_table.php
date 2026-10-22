<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_newsletters', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->string('hash', 150)->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('subject', 250)->default('');
            $table->string('type', 150)->default('standard');
            $table->string('sender_address', 150)->default('');
            $table->string('sender_name', 150)->default('');
            $table->string('status', 20)->default('draft');
            $table->string('reply_to_address', 150)->default('');
            $table->string('reply_to_name', 150)->default('');
            $table->string('preheader', 250)->default('');
            $table->longText('body')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();
            $table->char('unsubscribe_token', 15)->nullable();
            $table->string('ga_campaign', 250)->default('');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_newsletters');
    }
};
