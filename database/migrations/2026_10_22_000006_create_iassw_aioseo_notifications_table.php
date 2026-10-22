<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_aioseo_notifications', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('id');
            $table->string('slug', 13);
            $table->string('addon', 64)->nullable();
            $table->text('title');
            $table->longText('content');
            $table->string('type', 64);
            $table->text('level');
            $table->unsignedBigInteger('notification_id')->nullable();
            $table->string('notification_name', 255)->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->string('button1_label', 255)->nullable();
            $table->string('button1_action', 255)->nullable();
            $table->string('button2_label', 255)->nullable();
            $table->string('button2_action', 255)->nullable();
            $table->boolean('dismissed')->default(0);
            $table->boolean('new')->default(1);
            $table->dateTime('created');
            $table->dateTime('updated');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_aioseo_notifications');
    }
};
