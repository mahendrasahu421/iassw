<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_statistics_newsletters', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->unsignedInteger('newsletter_id');
            $table->unsignedInteger('subscriber_id');
            $table->unsignedInteger('queue_id');
            $table->timestamp('sent_at')->nullable()->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_statistics_newsletters');
    }
};
