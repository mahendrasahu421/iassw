<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('ID');
            $table->string('user_login', 60)->default('');
            $table->string('user_pass', 255)->default('');
            $table->string('user_nicename', 50)->default('');
            $table->string('user_email', 100)->default('');
            $table->string('user_url', 100)->default('');
            $table->dateTime('user_registered')->nullable();
            $table->string('user_activation_key', 255)->default('');
            $table->integer('user_status')->default(0);
            $table->string('display_name', 250)->default('');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_users');
    }
};
