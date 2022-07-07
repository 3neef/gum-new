<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneSalePivotTable extends Migration
{
    public function up()
    {
        Schema::create('phone_sale', function (Blueprint $table) {
            $table->unsignedBigInteger('sale_id');
            $table->foreign('sale_id', 'sale_id_fk_6884918')->references('id')->on('sales')->onDelete('cascade');
            $table->unsignedBigInteger('phone_id');
            $table->foreign('phone_id', 'phone_id_fk_6884918')->references('id')->on('phones')->onDelete('cascade');
        });
    }
}
