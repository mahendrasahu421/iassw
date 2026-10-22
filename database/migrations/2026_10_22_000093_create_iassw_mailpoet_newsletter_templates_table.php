<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_newsletter_templates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->integer('newsletter_id')->nullable()->default(0);
            $table->string('name', 250);
            $table->string('categories', 250)->default('[]');
            $table->string('description', 255)->default('');
            $table->longText('body')->nullable();
            $table->longText('thumbnail')->nullable();
            $table->longText('thumbnail_data')->nullable();
            $table->boolean('readonly')->nullable()->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_newsletter_templates');
    }
};
