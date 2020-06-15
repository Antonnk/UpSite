<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTable extends Migration
{
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->json('payload');
            $table->foreignId('site_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('content');
    }
}
