<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gf_entry', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedMediumInteger('form_id');
            $table->unsignedBigInteger('post_id')->nullable();
            $table->dateTime('date_created');
            $table->dateTime('date_updated')->nullable();
            $table->tinyInteger('is_starred')->default(0);
            $table->tinyInteger('is_read')->default(0);
            $table->string('ip', 45);
            $table->string('source_url', 200)->default('');
            $table->string('user_agent', 250)->default('');
            $table->string('currency', 5)->nullable();
            $table->string('payment_status', 15)->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->decimal('payment_amount', 19, 2)->nullable();
            $table->string('payment_method', 30)->nullable();
            $table->string('transaction_id', 50)->nullable();
            $table->tinyInteger('is_fulfilled')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->tinyInteger('transaction_type')->nullable();
            $table->string('status', 20)->default('active');

            $table->index(['form_id'], 'form_id');
            $table->index(['form_id', 'status'], 'form_id_status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gf_entry');
    }
};
