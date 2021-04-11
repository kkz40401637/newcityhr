<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->text('Title');
            $table->text('StationID');
            $table->text('StartDate');
            $table->text('EndDate');
            $table->text('NewsDescription')->nullable();
            $table->text('Note')->nullable();
            $table->integer('RegId')->nullable();
            $table->integer('UpdId')->nullable();
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
        Schema::dropIfExists('holidays');
    }
}
