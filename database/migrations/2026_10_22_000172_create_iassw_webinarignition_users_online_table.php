<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_webinarignition_users_online', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->unsignedInteger('ID');
            $table->string('app_id', 150)->nullable();
            $table->timestamp('dt')->useCurrent();
            $table->string('IP', 150)->nullable();
            $table->bigInteger('lead_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_webinarignition_users_online');
    }
};
