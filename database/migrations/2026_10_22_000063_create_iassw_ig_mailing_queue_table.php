<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_mailing_queue', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->string('hash', 50);
            $table->integer('campaign_id')->default(0);
            $table->text('subject')->nullable();
            $table->longText('body')->nullable();
            $table->unsignedInteger('count')->default(0);
            $table->string('status', 10);
            $table->dateTime('start_at')->nullable();
            $table->dateTime('finish_at')->nullable();
            $table->longText('meta')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_mailing_queue');
    }
};
