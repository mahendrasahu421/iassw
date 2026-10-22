<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_statistics_unsubscribes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->unsignedInteger('newsletter_id')->nullable();
            $table->unsignedInteger('subscriber_id');
            $table->unsignedInteger('queue_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->string('source', 255)->nullable()->default('unknown');
            $table->string('meta', 255)->nullable();
            $table->string('method', 40)->default('unknown');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_statistics_unsubscribes');
    }
};
