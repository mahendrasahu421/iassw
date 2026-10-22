<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_ig_contacts_ips', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->string('ip', 45);
            $table->timestamp('created_on')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_ig_contacts_ips');
    }
};
