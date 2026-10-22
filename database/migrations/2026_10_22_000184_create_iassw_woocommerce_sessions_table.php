<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_woocommerce_sessions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('session_id');
            $table->char('session_key', 32);
            $table->longText('session_value');
            $table->unsignedBigInteger('session_expiry');

            $table->primary(['session_id']);
            $table->unique(['session_key'], 'session_key');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_woocommerce_sessions');
    }
};
