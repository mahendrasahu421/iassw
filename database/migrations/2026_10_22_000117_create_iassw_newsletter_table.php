<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_newsletter', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->string('name', 100)->default('');
            $table->string('email', 100)->default('');
            $table->string('token', 50)->default('');
            $table->string('language', 10)->default('');
            $table->string('status', 1)->default('S');
            $table->integer('id');
            $table->mediumText('profile')->nullable();
            $table->timestamp('created')->useCurrent();
            $table->integer('updated')->default(0);
            $table->integer('last_activity')->default(0);
            $table->tinyInteger('followup_step')->default(0);
            $table->bigInteger('followup_time')->default(0);
            $table->tinyInteger('followup')->default(0);
            $table->string('surname', 100)->default('');
            $table->char('sex', 1)->default('n');
            $table->bigInteger('feed_time')->default(0);
            $table->tinyInteger('feed')->default(0);
            $table->string('referrer', 50)->default('');
            $table->string('ip', 50)->default('');
            $table->integer('wp_user_id')->default(0);
            $table->string('http_referer', 255)->default('');
            $table->tinyInteger('geo')->default(0);
            $table->string('country', 4)->default('');
            $table->string('region', 100)->default('');
            $table->string('city', 100)->default('');
            $table->string('bounce_type', 50)->default('');
            $table->integer('bounce_time')->default(0);
            $table->integer('unsub_email_id')->default(0);
            $table->integer('unsub_time')->default(0);
            $table->tinyInteger('list_1')->default(0);
            $table->tinyInteger('list_2')->default(0);
            $table->tinyInteger('list_3')->default(0);
            $table->tinyInteger('list_4')->default(0);
            $table->tinyInteger('list_5')->default(0);
            $table->tinyInteger('list_6')->default(0);
            $table->tinyInteger('list_7')->default(0);
            $table->tinyInteger('list_8')->default(0);
            $table->tinyInteger('list_9')->default(0);
            $table->tinyInteger('list_10')->default(0);
            $table->tinyInteger('list_11')->default(0);
            $table->tinyInteger('list_12')->default(0);
            $table->tinyInteger('list_13')->default(0);
            $table->tinyInteger('list_14')->default(0);
            $table->tinyInteger('list_15')->default(0);
            $table->tinyInteger('list_16')->default(0);
            $table->tinyInteger('list_17')->default(0);
            $table->tinyInteger('list_18')->default(0);
            $table->tinyInteger('list_19')->default(0);
            $table->tinyInteger('list_20')->default(0);
            $table->tinyInteger('list_21')->default(0);
            $table->tinyInteger('list_22')->default(0);
            $table->tinyInteger('list_23')->default(0);
            $table->tinyInteger('list_24')->default(0);
            $table->tinyInteger('list_25')->default(0);
            $table->tinyInteger('list_26')->default(0);
            $table->tinyInteger('list_27')->default(0);
            $table->tinyInteger('list_28')->default(0);
            $table->tinyInteger('list_29')->default(0);
            $table->tinyInteger('list_30')->default(0);
            $table->tinyInteger('list_31')->default(0);
            $table->tinyInteger('list_32')->default(0);
            $table->tinyInteger('list_33')->default(0);
            $table->tinyInteger('list_34')->default(0);
            $table->tinyInteger('list_35')->default(0);
            $table->tinyInteger('list_36')->default(0);
            $table->tinyInteger('list_37')->default(0);
            $table->tinyInteger('list_38')->default(0);
            $table->tinyInteger('list_39')->default(0);
            $table->tinyInteger('list_40')->default(0);
            $table->string('profile_1', 255)->default('');
            $table->string('profile_2', 255)->default('');
            $table->string('profile_3', 255)->default('');
            $table->string('profile_4', 255)->default('');
            $table->string('profile_5', 255)->default('');
            $table->string('profile_6', 255)->default('');
            $table->string('profile_7', 255)->default('');
            $table->string('profile_8', 255)->default('');
            $table->string('profile_9', 255)->default('');
            $table->string('profile_10', 255)->default('');
            $table->string('profile_11', 255)->default('');
            $table->string('profile_12', 255)->default('');
            $table->string('profile_13', 255)->default('');
            $table->string('profile_14', 255)->default('');
            $table->string('profile_15', 255)->default('');
            $table->string('profile_16', 255)->default('');
            $table->string('profile_17', 255)->default('');
            $table->string('profile_18', 255)->default('');
            $table->string('profile_19', 255)->default('');
            $table->string('profile_20', 255)->default('');
            $table->tinyInteger('test')->default(0);
            $table->string('source', 50)->default('');

            $table->primary(['id']);
            $table->unique(['email'], 'email');
            $table->index(['wp_user_id'], 'wp_user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_newsletter');
    }
};
