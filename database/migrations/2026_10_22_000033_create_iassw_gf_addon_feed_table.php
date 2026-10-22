<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_addon_feed', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedMediumInteger('id');
            $table->unsignedMediumInteger('form_id');
            $table->boolean('is_active')->default(1);
            $table->unsignedMediumInteger('feed_order')->default(0);
            $table->longText('meta')->nullable();
            $table->string('addon_slug', 50)->nullable();
            $table->string('event_type', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_addon_feed');
    }
};
