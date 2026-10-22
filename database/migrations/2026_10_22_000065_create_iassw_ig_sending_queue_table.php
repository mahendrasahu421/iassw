<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_sending_queue', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->integer('mailing_queue_id')->default(0);
            $table->string('mailing_queue_hash', 50)->nullable();
            $table->integer('campaign_id')->default(0);
            $table->integer('contact_id')->default(0);
            $table->string('contact_hash', 255)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('status', 50)->nullable();
            $table->longText('links')->nullable();
            $table->integer('opened')->nullable();
            $table->dateTime('send_at')->nullable();
            $table->dateTime('sent_at')->nullable();
            $table->dateTime('opened_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_sending_queue');
    }
};
