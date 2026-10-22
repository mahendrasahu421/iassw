<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_links', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('link_id');
            $table->string('link_url', 255)->default('');
            $table->string('link_name', 255)->default('');
            $table->string('link_image', 255)->default('');
            $table->string('link_target', 25)->default('');
            $table->string('link_description', 255)->default('');
            $table->string('link_visible', 20)->default('Y');
            $table->unsignedBigInteger('link_owner')->default(1);
            $table->integer('link_rating')->default(0);
            $table->dateTime('link_updated')->nullable();
            $table->string('link_rel', 255)->default('');
            $table->mediumText('link_notes');
            $table->string('link_rss', 255)->default('');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_links');
    }
};
