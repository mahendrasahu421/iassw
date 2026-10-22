<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_rate_limits', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('rate_limit_id');
            $table->string('rate_limit_key', 200);
            $table->unsignedBigInteger('rate_limit_expiry');
            $table->smallInteger('rate_limit_remaining')->default(0);

            $table->primary(['rate_limit_id']);
        });
        DB::statement('ALTER TABLE `IASSW_wc_rate_limits` ADD UNIQUE KEY `rate_limit_key` (`rate_limit_key`(191))');
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_rate_limits');
    }
};
