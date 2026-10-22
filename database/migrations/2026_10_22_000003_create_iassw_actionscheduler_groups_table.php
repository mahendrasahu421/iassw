<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_actionscheduler_groups', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('group_id');
            $table->string('slug', 255);

            $table->primary(['group_id']);
            $table->rawIndex('`slug`(191)', 'slug');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_actionscheduler_groups');
    }
};
