<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_sending_queues', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->unsignedInteger('task_id');
            $table->unsignedInteger('newsletter_id')->nullable();
            $table->longText('newsletter_rendered_body')->nullable();
            $table->string('newsletter_rendered_subject', 250)->nullable();
            $table->longText('subscribers')->nullable();
            $table->unsignedInteger('count_total')->default(0);
            $table->unsignedInteger('count_processed')->default(0);
            $table->unsignedInteger('count_to_process')->default(0);
            $table->longText('meta')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_sending_queues');
    }
};
