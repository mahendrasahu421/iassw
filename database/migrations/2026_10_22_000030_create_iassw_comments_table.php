<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('comment_ID');
            $table->unsignedBigInteger('comment_post_ID')->default(0);
            $table->tinyText('comment_author');
            $table->string('comment_author_email', 100)->default('');
            $table->string('comment_author_url', 200)->default('');
            $table->string('comment_author_IP', 100)->default('');
            $table->dateTime('comment_date')->nullable();
            $table->dateTime('comment_date_gmt')->nullable();
            $table->text('comment_content');
            $table->integer('comment_karma')->default(0);
            $table->string('comment_approved', 20)->default('1');
            $table->string('comment_agent', 255)->default('');
            $table->string('comment_type', 20)->default('comment');
            $table->unsignedBigInteger('comment_parent')->default(0);
            $table->unsignedBigInteger('user_id')->default(0);

            $table->index(['comment_type'], 'woo_idx_comment_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_comments');
    }
};
