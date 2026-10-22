<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_revslider_layer_animations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->integer('id');
            $table->text('handle');
            $table->text('params');
            $table->text('settings')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_revslider_layer_animations');
    }
};
