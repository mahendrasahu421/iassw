<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_term_taxonomy', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('term_taxonomy_id');
            $table->unsignedBigInteger('term_id')->default(0);
            $table->string('taxonomy', 32)->default('');
            $table->longText('description');
            $table->unsignedBigInteger('parent')->default(0);
            $table->bigInteger('count')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_term_taxonomy');
    }
};
