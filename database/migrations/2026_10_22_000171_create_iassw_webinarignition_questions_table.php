<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_webinarignition_questions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->unsignedInteger('ID');
            $table->string('app_id', 20)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->longText('question')->nullable();
            $table->string('status', 200)->nullable();
            $table->string('attr1', 50)->nullable();
            $table->string('attr2', 50)->nullable();
            $table->string('attr3', 50)->nullable();
            $table->string('attr4', 50)->nullable();
            $table->string('attr5', 50)->nullable();
            $table->text('answer')->nullable();
            $table->mediumText('answer_text')->nullable();
            $table->text('webinarTime')->nullable();
            $table->string('created', 200)->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->string('type', 30)->default('');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_webinarignition_questions');
    }
};
