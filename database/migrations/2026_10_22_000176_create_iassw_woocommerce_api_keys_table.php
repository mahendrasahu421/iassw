<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_api_keys', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('key_id');
            $table->unsignedBigInteger('user_id');
            $table->string('description', 200)->nullable();
            $table->string('permissions', 10);
            $table->char('consumer_key', 64);
            $table->char('consumer_secret', 43);
            $table->longText('nonces')->nullable();
            $table->char('truncated_key', 7);
            $table->dateTime('last_access')->nullable();

            $table->primary(['key_id']);
            $table->index(['consumer_key'], 'consumer_key');
            $table->index(['consumer_secret'], 'consumer_secret');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_api_keys');
    }
};
