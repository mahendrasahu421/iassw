<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_contacts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->integer('wp_user_id')->default(0);
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('email', 50);
            $table->string('source', 50)->nullable();
            $table->string('ip_address', 50)->nullable();
            $table->string('country_code', 50)->nullable();
            $table->enum('bounce_status', ['0', '1', '2'])->default('0');
            $table->string('timezone', 255)->nullable();
            $table->integer('form_id')->default(0);
            $table->string('status', 10)->nullable();
            $table->string('reference_site', 255)->nullable();
            $table->boolean('unsubscribed')->default(0);
            $table->string('hash', 50)->nullable();
            $table->float('engagement_score')->nullable();
            $table->time('average_opened_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->boolean('is_verified')->nullable()->default(0);
            $table->boolean('is_disposable')->nullable()->default(0);
            $table->boolean('is_rolebased')->nullable()->default(0);
            $table->boolean('is_webmail')->nullable()->default(0);
            $table->boolean('is_deliverable')->nullable()->default(0);
            $table->boolean('is_sendsafely')->nullable()->default(0);
            $table->longText('meta')->charset('utf8')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_contacts');
    }
};
