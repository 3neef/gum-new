<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSwapsTable extends Migration
{
    public function up()
    {
        Schema::table('swaps', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id', 'customer_fk_6911237')->references('id')->on('customers');
            $table->unsignedBigInteger('phone_1_id')->nullable();
            $table->foreign('phone_1_id', 'phone_1_fk_6911238')->references('id')->on('phones');
            $table->unsignedBigInteger('phone_2_id')->nullable();
            $table->foreign('phone_2_id', 'phone_2_fk_6911239')->references('id')->on('phones');
        });
    }
}
