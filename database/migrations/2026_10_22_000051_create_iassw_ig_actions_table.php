<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_actions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('contact_id')->nullable();
            $table->unsignedBigInteger('message_id')->nullable();
            $table->unsignedBigInteger('campaign_id')->nullable();
            $table->boolean('type')->default(0);
            $table->unsignedInteger('count')->default(0);
            $table->unsignedBigInteger('link_id')->default(0);
            $table->unsignedInteger('list_id')->default(0);
            $table->string('ip', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('device', 50)->nullable();
            $table->string('browser', 50)->nullable();
            $table->string('email_client', 50)->nullable();
            $table->string('os', 50)->nullable();
            $table->unsignedInteger('created_at')->default(0);
            $table->unsignedInteger('updated_at')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_actions');
    }
};
