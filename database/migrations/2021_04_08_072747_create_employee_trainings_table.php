<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_trainings', function (Blueprint $table) {
            $table->id();
            $table->text('EmployeeID')->nullable();
            $table->text('JobField')->nullable();
            $table->text('TrainingTitle')->nullable();
            $table->text('OrganizationName')->nullable();
            $table->text('Location')->nullable();
            $table->text('TrainingStartDate')->nullable();
            $table->text('TrainingEndDate')->nullable();
            $table->text('RegId')->nullable();
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
        Schema::dropIfExists('employee_trainings');
    }
}

