<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_entry_notes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('entry_id');
            $table->string('user_name', 250)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->dateTime('date_created');
            $table->longText('value')->nullable();
            $table->string('note_type', 50)->nullable();
            $table->string('sub_type', 50)->nullable();

            $table->index(['entry_id'], 'entry_id');
            $table->index(['entry_id', 'user_id'], 'entry_user_key');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_entry_notes');
    }
};
