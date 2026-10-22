<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_log', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('id');
            $table->string('name', 255)->nullable();
            $table->integer('level')->nullable();
            $table->longText('message')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->longText('raw_message')->nullable();
            $table->longText('context')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_log');
    }
};
