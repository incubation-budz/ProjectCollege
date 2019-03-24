<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMbasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mbas', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD
=======
            $table->string('');
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
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
        Schema::dropIfExists('mbas');
    }
}
