<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_admin_notes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('note_id');
            $table->string('name', 255);
            $table->string('type', 20);
            $table->string('locale', 20);
            $table->longText('title');
            $table->longText('content');
            $table->longText('content_data')->nullable();
            $table->string('status', 200);
            $table->string('source', 200);
            $table->dateTime('date_created')->nullable();
            $table->dateTime('date_reminder')->nullable();
            $table->boolean('is_snoozable')->default(0);
            $table->string('layout', 20)->default('');
            $table->string('image', 200)->nullable();
            $table->boolean('is_deleted')->default(0);
            $table->boolean('is_read')->default(0);
            $table->string('icon', 200)->default('info');

            $table->primary(['note_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_admin_notes');
    }
};
