<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_lists_contacts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->integer('list_id');
            $table->integer('contact_id');
            $table->string('status', 50);
            $table->tinyInteger('optin_type');
            $table->dateTime('subscribed_at')->nullable();
            $table->string('subscribed_ip', 45)->nullable();
            $table->dateTime('unsubscribed_at')->nullable();
            $table->string('unsubscribed_ip', 45)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_lists_contacts');
    }
};
