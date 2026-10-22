<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_frmaster_order', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('cause_id')->nullable();
            $table->dateTime('booking_date')->nullable();
            $table->longText('booking_detail')->nullable();
            $table->string('order_status', 20)->nullable();
            $table->decimal('donation_amount', 19, 4)->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->longText('payment_info')->nullable();
            $table->unsignedBigInteger('recurring_order_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_frmaster_order');
    }
};
