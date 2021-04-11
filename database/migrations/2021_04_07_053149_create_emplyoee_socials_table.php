<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmplyoeeSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplyoee_socials', function (Blueprint $table) {
            $table->id();
            $table->text('EmployeeID')->nullable();
            $table->text('Twitter')->nullable();
            $table->text('Facebook')->nullable();
            $table->text('LinkedIn')->nullable();
            $table->text('Skype')->nullable();
            $table->text('Token')->nullable();
            $table->text('HideShow')->nullable();
            $table->text('Status')->nullable();
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
        Schema::dropIfExists('emplyoee_socials');
    }
}
