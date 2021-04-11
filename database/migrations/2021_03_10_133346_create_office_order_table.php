<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_order', function (Blueprint $table) {
            $table->id();
            $table->text('u_id')->nullable();
            $table->text('Title');
            $table->text('Description')->nullable();
            $table->text('RegId')->nullable();
            $table->text('UpdId')->nullable();
            $table->text('Token');
            $table->text('Status');
            $table->text('HideShow');
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
        Schema::dropIfExists('office_order');
    }
}
