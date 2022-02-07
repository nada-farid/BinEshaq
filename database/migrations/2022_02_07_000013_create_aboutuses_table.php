<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusesTable extends Migration
{
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('breif');
            $table->longText('description');
            $table->string('email_1');
            $table->string('email_2');
            $table->longText('vision');
            $table->longText('goals');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('address');
            $table->string('time');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instegram');
            $table->string('youtube');
            $table->string('linkedin');
            $table->longText('services_text');
            $table->longText('projects_text');
            $table->longText('products_text');
            $table->longText('news_text');
            $table->longText('contact_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
