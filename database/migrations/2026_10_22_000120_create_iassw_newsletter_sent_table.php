<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_newsletter_sent', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('email_id')->default(0);
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedTinyInteger('status')->default(0);
            $table->unsignedTinyInteger('open')->default(0);
            $table->unsignedInteger('time')->default(0);
            $table->string('error', 255)->default('');
            $table->string('ip', 100)->default('');

            $table->primary(['email_id', 'user_id']);
            $table->index(['user_id'], 'user_id');
            $table->index(['email_id'], 'email_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_newsletter_sent');
    }
};
