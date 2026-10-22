<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_admin_note_actions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('action_id');
            $table->unsignedBigInteger('note_id');
            $table->string('name', 255);
            $table->string('label', 255);
            $table->longText('query');
            $table->string('status', 255);
            $table->string('actioned_text', 255);
            $table->string('nonce_action', 255)->nullable();
            $table->string('nonce_name', 255)->nullable();

            $table->primary(['action_id']);
            $table->index(['note_id'], 'note_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_admin_note_actions');
    }
};
