<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_queue', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('contact_id')->default(0);
            $table->unsignedBigInteger('campaign_id')->default(0);
            $table->unsignedTinyInteger('requeued')->default(0);
            $table->unsignedInteger('added')->default(0);
            $table->unsignedInteger('timestamp')->default(0);
            $table->unsignedInteger('sent_at')->default(0);
            $table->unsignedTinyInteger('priority')->default(0);
            $table->unsignedTinyInteger('count')->default(0);
            $table->unsignedTinyInteger('error')->default(0);
            $table->unsignedTinyInteger('ignore_status')->default(0);
            $table->string('options', 191)->default('');
            $table->longText('tags');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_queue');
    }
};
