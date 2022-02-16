<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDevelopmentsTable extends Migration
{
    public function up()
    {
        Schema::create('company_developments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('year');
            $table->longText('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
