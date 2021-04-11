<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->integer('RegId');
            $table->integer('UpdId')->nullable();
            $table->text('BuID');
            $table->text('StationID');
            $table->text('Name');
            $table->text('Phone')->nullable();
            $table->text('Email')->nullable();
            $table->text('Note')->nullable();
            $table->text('Initial')->nullable();
            $table->text('Profile')->nullable();
            $table->integer('Status');
            $table->text('Token');
            $table->integer('HideShow');
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
        Schema::dropIfExists('departments');
    }
}
