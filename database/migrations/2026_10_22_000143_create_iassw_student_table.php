<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('iassw_student', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->integer('iassw_student_id');
            $table->string('name', 100);
            $table->string('IASSW_CODE', 15);
            $table->date('Paid_through');
            $table->string('Country', 20);
            $table->string('Contact', 50);
            $table->string('login_email', 100);
            $table->string('E_mail', 50);
            $table->integer('amount');
            $table->string('Invoice_No', 20);
            $table->string('no_of_schools', 10);
            $table->string('mem_fee_per_school', 100);
            $table->string('address', 255);
            $table->string('Plan_Name', 50);
            $table->integer('Invoice_Status')->default(0);
            $table->integer('Mail_status')->default(0);
            $table->string('discount', 100);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('iassw_student');
    }
};
