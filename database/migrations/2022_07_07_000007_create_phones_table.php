<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('state');
            $table->string('color')->nullable();
            $table->integer('battery')->nullable();
            $table->integer('space')->nullable();
            $table->string('ram')->nullable();
            $table->longText('notes')->nullable();
            $table->string('price')->nullable();
            $table->string('serial')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
