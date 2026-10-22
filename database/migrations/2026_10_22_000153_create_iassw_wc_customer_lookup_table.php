<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_wc_customer_lookup', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('username', 60)->default('');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('email', 100)->nullable();
            $table->timestamp('date_last_active')->nullable();
            $table->timestamp('date_registered')->nullable();
            $table->char('country', 2)->default('');
            $table->string('postcode', 20)->default('');
            $table->string('city', 100)->default('');
            $table->string('state', 100)->default('');

            $table->primary(['customer_id']);
            $table->unique(['user_id'], 'user_id');
            $table->index(['email'], 'email');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_wc_customer_lookup');
    }
};
