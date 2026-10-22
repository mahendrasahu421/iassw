<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_create_map', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('map_id');
            $table->string('map_title', 255)->nullable();
            $table->string('map_width', 255)->nullable();
            $table->string('map_height', 255)->nullable();
            $table->string('map_zoom_level', 255)->nullable();
            $table->string('map_type', 255)->nullable();
            $table->string('map_scrolling_wheel', 255)->nullable();
            $table->string('map_visual_refresh', 255)->nullable();
            $table->string('map_45imagery', 255)->nullable();
            $table->text('map_street_view_setting')->nullable();
            $table->text('map_route_direction_setting')->nullable();
            $table->text('map_all_control')->nullable();
            $table->text('map_info_window_setting')->nullable();
            $table->text('style_google_map')->nullable();
            $table->longText('map_locations')->nullable();
            $table->text('map_layer_setting')->nullable();
            $table->longText('map_polygon_setting')->nullable();
            $table->longText('map_polyline_setting')->nullable();
            $table->text('map_cluster_setting')->nullable();
            $table->text('map_overlay_setting')->nullable();
            $table->text('map_geotags')->nullable();
            $table->text('map_infowindow_setting')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_create_map');
    }
};
