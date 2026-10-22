<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_webinarignition_webhooks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->integer('id');
            $table->string('name', 255)->nullable();
            $table->string('trigger', 255);
            $table->string('integration', 255)->nullable()->default('default')->comment('default,fluentcrm,other custom integrations');
            $table->text('url');
            $table->boolean('request_method')->nullable()->default(0)->comment('0=GET,1=POST');
            $table->boolean('request_format')->nullable()->default(0)->comment('0=JSON,1=FORM');
            $table->text('secret')->nullable();
            $table->boolean('is_active')->nullable()->default(0)->comment('0=INACTIVE,1=ACTIVE');
            $table->text('conditions')->nullable()->comment('Holds fields conditions and mappings');
            $table->dateTime('modified')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_webinarignition_webhooks');
    }
};
