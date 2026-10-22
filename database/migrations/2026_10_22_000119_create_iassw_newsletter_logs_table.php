<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_newsletter_logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->integer('status')->default(0);
            $table->string('source', 100)->default('');
            $table->string('description', 255)->default('');
            $table->longText('data')->nullable();
            $table->integer('created')->default(0);

            $table->primary(['id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_newsletter_logs');
    }
};
