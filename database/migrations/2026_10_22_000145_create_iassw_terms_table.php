<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_terms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('term_id');
            $table->string('name', 200)->default('');
            $table->string('slug', 200)->default('');
            $table->bigInteger('term_group')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_terms');
    }
};
