<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wswebinars_subscribers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->tinyText('name');
            $table->string('email', 150);
            $table->string('secretkey', 64);
            $table->integer('onehourmailsent')->default(0);
            $table->integer('onedaymailsent')->default(0);
            $table->integer('wbstartingmailsent')->default(0);
            $table->integer('replaymailsent')->default(0);
            $table->integer('webinar_id');
            $table->string('watch_day', 3)->nullable();
            $table->time('watch_time')->nullable();
            $table->dateTime('time')->nullable();
            $table->dateTime('exact_time')->nullable();
            $table->unsignedInteger('active')->default(1);
            $table->dateTime('last_seen')->nullable();
            $table->unsignedInteger('high_five')->default(0);
            $table->unsignedInteger('attended')->default(0);
            $table->text('custom_fields')->nullable();
            $table->string('random_key', 32);
            $table->unsignedInteger('seconds_attended')->default(0);
            $table->unsignedInteger('newly_registered')->default(1);
            $table->dateTime('joined_at')->nullable();
            $table->unsignedInteger('anonymous_email')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wswebinars_subscribers');
    }
};
