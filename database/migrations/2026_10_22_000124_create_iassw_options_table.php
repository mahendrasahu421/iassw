<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_options', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('option_id');
            $table->string('option_name', 191)->default('');
            $table->longText('option_value');
            $table->string('autoload', 20)->default('yes');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_options');
    }
};
