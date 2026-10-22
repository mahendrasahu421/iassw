<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('IASSW_mailpoet_subscribers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_520_ci';

            $table->unsignedInteger('id');
            $table->bigInteger('wp_user_id')->nullable();
            $table->integer('is_woocommerce_user')->default(0);
            $table->string('first_name', 255)->default('');
            $table->string('last_name', 255)->default('');
            $table->string('email', 150);
            $table->string('status', 12)->default('unconfirmed');
            $table->string('subscribed_ip', 45)->nullable();
            $table->string('confirmed_ip', 45)->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('last_subscribed_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();
            $table->longText('unconfirmed_data')->nullable();
            $table->enum('source', ['form', 'imported', 'administrator', 'api', 'wordpress_user', 'woocommerce_user', 'woocommerce_checkout', 'unknown'])->nullable()->default('unknown');
            $table->unsignedInteger('count_confirmations')->default(0);
            $table->char('unsubscribe_token', 15)->nullable();
            $table->char('link_token', 32)->nullable();
            $table->float('engagement_score')->unsigned()->nullable();
            $table->timestamp('engagement_score_updated_at')->nullable();
            $table->timestamp('last_engagement_at')->nullable();
            $table->timestamp('woocommerce_synced_at')->nullable();
            $table->unsignedInteger('email_count')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('IASSW_mailpoet_subscribers');
    }
};
