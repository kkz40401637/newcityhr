<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->integer('RegId')->nullable();
            $table->integer('UpdId')->nullable();
            $table->text('Name');
            $table->text('Phone')->nullable();
            $table->text('FaxNumber')->nullable();
            $table->text('Website')->nullable();
            $table->text('TradingName')->nullable();
            $table->text('Email');
            $table->text('RegNo')->nullable();
            $table->text('City')->nullable();
            $table->text('State')->nullable();
            $table->text('Postal')->nullable();
            $table->text('CompanyAddress')->nullable();
            $table->text('PersonName')->nullable();
            $table->text('Position')->nullable();
            $table->text('PersonAddress')->nullable();
            $table->text('Vision')->nullable();
            $table->text('Mission')->nullable();
            $table->text('Note')->nullable();
            $table->text('Profile')->nullable();
            $table->text('Token');
            $table->integer('HideShow');
            $table->integer('Status');
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
        Schema::dropIfExists('company');
    }
}
