<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_jetpack_sync_queue', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('ID')->autoIncrement();
            $table->string('queue_id', 50);
            $table->string('event_id', 100);
            $table->longText('event_payload');
            $table->timestamp('timestamp')->useCurrent();

            $table->index(['event_id'], 'event_id');
            $table->index(['queue_id'], 'queue_id');
            $table->index(['queue_id', 'event_id'], 'queue_id_event_id');
            $table->index(['timestamp'], 'timestamp');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_jetpack_sync_queue');
    }
};
