<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_campaigns', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->string('slug', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('type', 50)->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('parent_type', 50)->nullable();
            $table->string('subject', 255)->nullable();
            $table->longText('body')->nullable();
            $table->string('from_name', 250)->nullable();
            $table->string('from_email', 150)->nullable();
            $table->string('reply_to_name', 250)->nullable();
            $table->string('reply_to_email', 150)->nullable();
            $table->text('categories')->nullable();
            $table->text('list_ids');
            $table->integer('base_template_id');
            $table->tinyInteger('status');
            $table->longText('meta')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_campaigns');
    }
};
