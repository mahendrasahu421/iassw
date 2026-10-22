<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_actionscheduler_claims', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('claim_id');
            $table->dateTime('date_created_gmt')->nullable();

            $table->primary(['claim_id']);
            $table->index(['date_created_gmt'], 'date_created_gmt');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_actionscheduler_claims');
    }
};
