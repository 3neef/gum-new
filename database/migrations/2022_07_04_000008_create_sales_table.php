<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('operation');
            $table->longText('notes')->nullable();
            $table->string('total_price');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
