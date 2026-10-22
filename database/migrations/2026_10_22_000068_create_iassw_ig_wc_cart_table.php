<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_wc_cart', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('id');
            $table->string('status', 100)->default('');
            $table->bigInteger('user_id')->default(0);
            $table->bigInteger('guest_id')->default(0);
            $table->dateTime('last_modified')->nullable();
            $table->dateTime('created')->nullable();
            $table->longText('items');
            $table->longText('coupons');
            $table->longText('fees');
            $table->double('shipping_tax_total')->default(0);
            $table->double('shipping_total')->default(0);
            $table->double('total')->default(0);
            $table->string('token', 32)->default('');
            $table->string('currency', 8)->default('');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_wc_cart');
    }
};
