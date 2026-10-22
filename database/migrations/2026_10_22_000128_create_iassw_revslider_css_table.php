<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_revslider_css', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->integer('id');
            $table->text('handle');
            $table->longText('settings')->nullable();
            $table->longText('hover')->nullable();
            $table->longText('advanced')->nullable();
            $table->longText('params');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_revslider_css');
    }
};
