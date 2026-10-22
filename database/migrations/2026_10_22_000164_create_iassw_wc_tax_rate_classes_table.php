<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_tax_rate_classes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('tax_rate_class_id');
            $table->string('name', 200)->default('');
            $table->string('slug', 200)->default('');

            $table->primary(['tax_rate_class_id']);
        });
        DB::statement('ALTER TABLE `IASSW_wc_tax_rate_classes` ADD UNIQUE KEY `slug` (`slug`(191))');
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_tax_rate_classes');
    }
};
