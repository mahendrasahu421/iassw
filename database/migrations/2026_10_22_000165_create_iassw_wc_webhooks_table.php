<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_webhooks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('webhook_id');
            $table->string('status', 200);
            $table->text('name');
            $table->unsignedBigInteger('user_id');
            $table->text('delivery_url');
            $table->text('secret');
            $table->string('topic', 200);
            $table->dateTime('date_created')->nullable();
            $table->dateTime('date_created_gmt')->nullable();
            $table->dateTime('date_modified')->nullable();
            $table->dateTime('date_modified_gmt')->nullable();
            $table->smallInteger('api_version');
            $table->smallInteger('failure_count')->default(0);
            $table->boolean('pending_delivery')->default(0);

            $table->primary(['webhook_id']);
            $table->index(['user_id'], 'user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_webhooks');
    }
};
