<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_log', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('log_id');
            $table->dateTime('timestamp');
            $table->smallInteger('level');
            $table->string('source', 200);
            $table->longText('message');
            $table->longText('context')->nullable();

            $table->primary(['log_id']);
            $table->index(['level'], 'level');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_log');
    }
};
