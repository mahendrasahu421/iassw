<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gla_shipping_rates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('id');
            $table->string('country', 2);
            $table->string('currency', 3);
            $table->double('rate')->default(0);
            $table->text('options')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gla_shipping_rates');
    }
};
