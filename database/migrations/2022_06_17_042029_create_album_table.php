<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->bigInteger('media')->unsigned();
            $table->date('date');
            $table->boolean('featured');
            $table->bigInteger('photographer_id')->unsigned();     //  foreign key
            $table->timestamps();
            $table->foreign('photographer_id')->references('id')->on('photographer')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album');
    }
};
