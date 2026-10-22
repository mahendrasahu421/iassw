<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_wc_guests', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('id');
            $table->string('email', 255)->default('');
            $table->string('tracking_key', 32)->default('');
            $table->dateTime('created')->nullable();
            $table->dateTime('last_active')->nullable();
            $table->longText('meta');
            $table->string('language', 10)->default('');
            $table->bigInteger('most_recent_order')->default(0);
            $table->bigInteger('version')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_wc_guests');
    }
};
