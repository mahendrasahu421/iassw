<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_addon_payment_callback', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->unsignedInteger('lead_id');
            $table->string('addon_slug', 250);
            $table->string('callback_id', 250)->nullable();
            $table->dateTime('date_created')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_addon_payment_callback');
    }
};
