<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_usermeta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedBigInteger('umeta_id');
            $table->unsignedBigInteger('user_id')->default(0);
            $table->string('meta_key', 255)->nullable();
            $table->longText('meta_value')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_usermeta');
    }
};
