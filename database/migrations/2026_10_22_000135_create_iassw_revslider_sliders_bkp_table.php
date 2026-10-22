<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_revslider_sliders_bkp', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->integer('id');
            $table->tinyText('title');
            $table->tinyText('alias')->nullable();
            $table->longText('params');
            $table->text('settings')->nullable();
            $table->string('type', 191)->default('');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_revslider_sliders_bkp');
    }
};
