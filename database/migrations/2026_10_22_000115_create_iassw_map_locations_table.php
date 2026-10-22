<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_map_locations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('location_id');
            $table->string('location_title', 255)->nullable();
            $table->string('location_address', 255)->nullable();
            $table->string('location_draggable', 255)->nullable();
            $table->string('location_infowindow_default_open', 255)->nullable();
            $table->string('location_animation', 255)->nullable();
            $table->string('location_latitude', 255)->nullable();
            $table->string('location_longitude', 255)->nullable();
            $table->string('location_city', 255)->nullable();
            $table->string('location_state', 255)->nullable();
            $table->string('location_country', 255)->nullable();
            $table->string('location_postal_code', 255)->nullable();
            $table->integer('location_zoom')->nullable();
            $table->integer('location_author')->nullable();
            $table->text('location_messages')->nullable();
            $table->text('location_settings')->nullable();
            $table->text('location_group_map')->nullable();
            $table->text('location_extrafields')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_map_locations');
    }
};
