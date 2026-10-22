<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_newsletter_stats', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->timestamp('created')->useCurrent();
            $table->string('url', 255)->default('');
            $table->integer('user_id')->default(0);
            $table->string('email_id', 10)->default('0');
            $table->string('ip', 100)->default('');

            $table->primary(['id']);
            $table->index(['email_id'], 'email_id');
            $table->index(['user_id'], 'user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_newsletter_stats');
    }
};
