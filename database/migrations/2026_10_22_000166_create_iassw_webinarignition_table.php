<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_webinarignition', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->unsignedInteger('ID');
            $table->string('created', 30)->nullable();
            $table->string('appname', 200)->nullable();
            $table->string('camtype', 20)->nullable();
            $table->string('total_lp', 200)->nullable();
            $table->string('total_ty', 200)->nullable();
            $table->string('total_live', 200)->nullable();
            $table->string('total_replay', 200)->nullable();
            $table->string('postID', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_webinarignition');
    }
};
