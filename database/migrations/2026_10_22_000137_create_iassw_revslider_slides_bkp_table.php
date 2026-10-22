<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_revslider_slides_bkp', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->integer('id');
            $table->integer('slider_id');
            $table->integer('slide_order');
            $table->longText('params');
            $table->longText('layers');
            $table->text('settings');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_revslider_slides_bkp');
    }
};
