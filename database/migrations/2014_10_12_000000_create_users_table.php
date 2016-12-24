<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->tinyInteger('stat')->default(2);
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('mtype')->default(0);
            $table->tinyInteger('terms')->default(0);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->string('coupon')->nullable();
            $table->string('braintree_id')->nullable();
            $table->string('paypal_email')->nullable();

            #$table->string('stripe_id')->nullable();

            $table->string('card_brand')->nullable();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('subscriptions', function ($table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->string('name');

            $table->string('braintree_id');
            $table->string('braintree_plan');

            #$table->string('stripe_id');
            #$table->string('stripe_plan');

            $table->integer('quantity');
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('subscriptions');
    }
}
