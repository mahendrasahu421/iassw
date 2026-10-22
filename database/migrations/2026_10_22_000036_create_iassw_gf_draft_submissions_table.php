<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_draft_submissions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->char('uuid', 32);
            $table->string('email', 255)->nullable();
            $table->unsignedMediumInteger('form_id');
            $table->dateTime('date_created');
            $table->string('ip', 45);
            $table->longText('source_url');
            $table->longText('submission');

            $table->primary(['uuid']);
            $table->index(['form_id'], 'form_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_draft_submissions');
    }
};
