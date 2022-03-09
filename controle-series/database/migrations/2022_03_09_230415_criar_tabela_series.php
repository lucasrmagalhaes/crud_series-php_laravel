<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaSeries extends Migration
{
    public function up()
    {
        Schema::create('series', function(Blueprint $table) {
            $table->string('nome');
        });
    }

    public function down()
    {
        Schema::drop('series');
    }
}
