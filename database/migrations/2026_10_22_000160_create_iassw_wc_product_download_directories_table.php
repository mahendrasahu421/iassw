<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_product_download_directories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('url_id');
            $table->string('url', 256);
            $table->boolean('enabled')->default(0);

            $table->primary(['url_id']);
            $table->rawIndex('`url`(191)', 'url');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_product_download_directories');
    }
};
