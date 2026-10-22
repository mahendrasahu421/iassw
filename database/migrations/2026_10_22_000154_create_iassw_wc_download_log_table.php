<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_download_log', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('download_log_id');
            $table->dateTime('timestamp');
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('user_ip_address', 100)->nullable()->default('');

            $table->primary(['download_log_id']);
            $table->index(['permission_id'], 'permission_id');
            $table->index(['timestamp'], 'timestamp');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_download_log');
    }
};
