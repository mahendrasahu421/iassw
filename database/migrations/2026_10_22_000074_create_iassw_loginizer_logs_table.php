<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_loginizer_logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->string('username', 255)->default('');
            $table->integer('time')->default(0);
            $table->integer('count')->default(0);
            $table->integer('lockout')->default(0);
            $table->string('ip', 255)->default('');
            $table->string('url', 255)->default('');

            $table->unique(['ip'], 'ip');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_loginizer_logs');
    }
};
