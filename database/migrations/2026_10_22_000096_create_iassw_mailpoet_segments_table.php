<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_segments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->string('name', 90);
            $table->string('type', 90)->default('default');
            $table->string('description', 250)->default('');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();
            $table->float('average_engagement_score')->unsigned()->nullable();
            $table->timestamp('average_engagement_score_updated_at')->nullable();
            $table->boolean('display_in_manage_subscription_page')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_segments');
    }
};
