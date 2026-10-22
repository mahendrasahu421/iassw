<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_group_map', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('group_map_id');
            $table->string('group_map_title', 255)->nullable();
            $table->text('group_marker')->nullable();
            $table->text('extensions_fields')->nullable();
            $table->integer('group_parent')->nullable()->default(0);
            $table->timestamp('group_added')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_group_map');
    }
};
