<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchesTable extends Migration
{

    public function up()
    {
        Schema::create('searches', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('language',2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('searches');
    }
}
