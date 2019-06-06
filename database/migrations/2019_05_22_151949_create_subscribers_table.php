<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('lastname');
            $table->string('lastname2');
            $table->string('address');
            $table->date('birthday');
            $table->string('cellphone');
            $table->string('email');
            $table->string('city');
            $table->string('type');
            $table->string('origin')->nullable();
            $table->string('origin2')->nullable();
            $table->string('semester')->nullable();
            $table->string('document')->nullable();

            $table->string('workplace')->nullable();
            $table->string('area')->nullable();
            $table->string('position')->nullable();
            $table->string('experience')->nullable();

            $table->string('receipt');
            
            $table->string('media')->nullable();
            $table->string('motive')->nullable();
            $table->string('method')->nullable();
            $table->string('plan')->nullable();
            $table->string('place')->nullable();

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
        Schema::dropIfExists('subscribers');
    }
}
