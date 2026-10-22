<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_gla_merchant_issues', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->bigInteger('id');
            $table->bigInteger('product_id');
            $table->string('issue', 200);
            $table->string('code', 100);
            $table->string('severity', 20)->default('warning');
            $table->string('product', 100);
            $table->text('action');
            $table->string('action_url', 1024);
            $table->text('applicable_countries');
            $table->string('source', 10)->default('mc');
            $table->string('type', 10)->default('product');
            $table->dateTime('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_gla_merchant_issues');
    }
};
