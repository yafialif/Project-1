<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateDaftarmobilTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('daftarmobil',function(Blueprint $table){
            $table->increments("id");
            $table->string("no_kerangka");
            $table->string("no_polisi");
            $table->string("merek");
            $table->string("tipe");
            $table->string("tahun");
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
        Schema::drop('daftarmobil');
    }

}