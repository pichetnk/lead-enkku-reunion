<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facebook_id',50);    
            $table->string('nickname',50);
            $table->string('team',5);
            $table->string('group',5)->nullable();
            $table->string('generation',5)->nullable();
           // $table->enum('join_event',['going', 'not_go']);
            $table->foreign('facebook_id')->references('facebook_id')->on('users');
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
        Schema::dropIfExists('user_details');
    }
}
