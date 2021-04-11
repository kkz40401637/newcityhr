<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_units', function (Blueprint $table) {
            $table->id();
            $table->text('Name')->nullable();
            $table->text('Description')->nullable();
            $table->text('Profile')->nullable();
            $table->text('Token')->nullable();
            $table->text('Status')->nullable();
            $table->text('HideShow')->nullable();
            $table->text('RegId')->nullable();
            $table->text('UpdId')->nullable();
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
        Schema::dropIfExists('business_units');
    }
}
