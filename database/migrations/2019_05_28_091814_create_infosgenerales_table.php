<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosgeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infosgenerales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_logo');
            $table->string('titre');
            $table->string('slogan');
            $table->string('titre_desc');
            $table->longText('contenu_desc');
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
        Schema::dropIfExists('infosgenerales');
    }
}
