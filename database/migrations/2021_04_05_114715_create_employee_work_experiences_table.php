<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->text('EmployeeID')->nullable();
            $table->text('OrganizationName')->nullable();
            $table->text('JobDesignation')->nullable();
            $table->text('JobField')->nullable();
            $table->text('JobStartDate')->nullable();
            $table->text('JobEndDate')->nullable();
            $table->text('StartingSalary')->nullable();
            $table->text('EndingSalary')->nullable();
            $table->text('TypeOfBusiness')->nullable();
            $table->text('OtherBenefit')->nullable();
            $table->text('ReasonForLeaving')->nullable();
            $table->text('Period')->nullable();
            $table->text('JobDescription')->nullable();
            $table->text('Token')->nullable();
            $table->text('HideShow')->nullable();
            $table->text('Status')->nullable();
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
        Schema::dropIfExists('work_experiences');
    }
}
