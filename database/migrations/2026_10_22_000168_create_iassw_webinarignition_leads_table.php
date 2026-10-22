<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_webinarignition_leads', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->unsignedInteger('ID');
            $table->string('app_id', 20)->nullable();
            $table->string('name', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('phone', 200)->nullable();
            $table->string('skype', 200)->nullable();
            $table->string('lead_status', 50)->nullable();
            $table->string('event', 50)->nullable();
            $table->string('replay', 50)->nullable();
            $table->string('trk1', 50)->nullable();
            $table->string('trk2', 50)->nullable();
            $table->string('trk3', 50)->nullable();
            $table->string('trk4', 50)->nullable();
            $table->string('trk5', 50)->nullable();
            $table->string('trk6', 50)->nullable();
            $table->string('trk7', 50)->nullable();
            $table->string('trk8', 50)->nullable();
            $table->string('trk9', 50)->nullable();
            $table->string('lead_browser_and_os', 256)->nullable();
            $table->string('gdpr_data', 256)->nullable();
            $table->string('created', 200)->nullable();
            $table->string('hash_ID', 40)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_webinarignition_leads');
    }
};
