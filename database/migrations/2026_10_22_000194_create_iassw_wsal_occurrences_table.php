<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wsal_occurrences', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('id');
            $table->bigInteger('site_id');
            $table->bigInteger('alert_id');
            $table->double('created_on');
            $table->string('client_ip', 255);
            $table->string('severity', 255);
            $table->string('object', 255);
            $table->string('event_type', 255);
            $table->string('user_agent', 255);
            $table->string('user_roles', 255);
            $table->string('username', 255)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('session_id', 255);
            $table->string('post_status', 255);
            $table->string('post_type', 255);
            $table->bigInteger('post_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wsal_occurrences');
    }
};
