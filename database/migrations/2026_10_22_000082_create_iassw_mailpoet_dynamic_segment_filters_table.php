<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_dynamic_segment_filters', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->unsignedInteger('segment_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->binary('filter_data')->nullable();
            $table->string('filter_type', 255)->nullable();
            $table->string('action', 255)->nullable();
        });
        DB::statement('ALTER TABLE `IASSW_mailpoet_dynamic_segment_filters` MODIFY `filter_data` LONGBLOB');
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_dynamic_segment_filters');
    }
};
