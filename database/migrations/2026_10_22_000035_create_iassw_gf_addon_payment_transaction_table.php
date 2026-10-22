<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_addon_payment_transaction', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->unsignedInteger('lead_id');
            $table->string('transaction_type', 30);
            $table->string('transaction_id', 50)->nullable();
            $table->string('subscription_id', 50)->nullable();
            $table->boolean('is_recurring')->default(0);
            $table->decimal('amount', 19, 2)->nullable();
            $table->dateTime('date_created')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_addon_payment_transaction');
    }
};
