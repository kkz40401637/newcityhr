<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSsbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_ssb', function (Blueprint $table) {
            $table->id();
            $table->text('EmployeeID')->nullable();
            $table->text('SSBNo')->nullable();
            $table->text('EmployerNo')->nullable();
            $table->text('SSBFile')->nullable();
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
        Schema::dropIfExists('employee_ssb');
    }
}
