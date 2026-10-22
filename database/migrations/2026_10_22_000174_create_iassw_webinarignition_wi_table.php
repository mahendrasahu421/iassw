<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_webinarignition_wi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->unsignedInteger('ID');
            $table->string('keyused', 150)->nullable();
            $table->string('switch', 150)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_webinarignition_wi');
    }
};
