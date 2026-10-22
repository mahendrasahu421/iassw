<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mystickymenu_contact_lists', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('ID');
            $table->string('contact_name', 255)->nullable();
            $table->string('contact_phone', 255)->nullable();
            $table->string('contact_email', 255)->nullable();
            $table->string('widget_name', 255)->nullable();
            $table->string('page_link', 522)->nullable();
            $table->dateTime('message_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mystickymenu_contact_lists');
    }
};
