<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wi_logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('campaign_id')->nullable();
            $table->timestamp('date')->useCurrent()->useCurrentOnUpdate();
            $table->tinyInteger('type')->nullable();
            $table->text('message');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wi_logs');
    }
};
