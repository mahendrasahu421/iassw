<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_rg_stripe_transaction', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->unsignedInteger('entry_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('transaction_type', 30);
            $table->string('transaction_id', 50)->nullable();
            $table->decimal('amount', 19, 2)->nullable();
            $table->string('currency', 5)->nullable();
            $table->dateTime('date_created')->nullable();
            $table->char('mode', 4);
            $table->longText('meta')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_rg_stripe_transaction');
    }
};
