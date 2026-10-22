<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_signups', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('signup_id');
            $table->string('domain', 200)->default('');
            $table->string('path', 100)->default('');
            $table->longText('title');
            $table->string('user_login', 60)->default('');
            $table->string('user_email', 100)->default('');
            $table->dateTime('registered')->nullable();
            $table->dateTime('activated')->nullable();
            $table->boolean('active')->default(0);
            $table->string('activation_key', 50)->default('');
            $table->longText('meta')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_signups');
    }
};
