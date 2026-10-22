<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_newsletter_user_logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->integer('user_id')->default(0);
            $table->string('ip', 50)->default('');
            $table->string('source', 50)->default('');
            $table->longText('data')->nullable();
            $table->integer('created')->default(0);

            $table->primary(['id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_newsletter_user_logs');
    }
};
