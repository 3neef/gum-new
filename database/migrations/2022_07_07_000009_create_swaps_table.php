<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwapsTable extends Migration
{
    public function up()
    {
        Schema::create('swaps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('price_diffrance')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
