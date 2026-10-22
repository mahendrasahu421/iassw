<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_statistics_woocommerce_purchases', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->unsignedInteger('newsletter_id');
            $table->unsignedInteger('subscriber_id');
            $table->unsignedInteger('queue_id');
            $table->unsignedInteger('click_id');
            $table->unsignedBigInteger('order_id');
            $table->char('order_currency', 3);
            $table->float('order_price_total')->comment('With shipping and taxes in order_currency');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_statistics_woocommerce_purchases');
    }
};
