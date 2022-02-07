<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('brief_summary');
            $table->longText('description');
            $table->integer('years');
            $table->integer('projects');
            $table->integer('special_customer');
            $table->integer('worker');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
