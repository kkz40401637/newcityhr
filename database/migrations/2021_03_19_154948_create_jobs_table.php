<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_requesting', function (Blueprint $table) {
            $table->id();
            $table->text('ApprovalId')->nullable();
            $table->text('Title')->nullable();
            $table->text('Position')->nullable();
            $table->text('Location')->nullable();
            $table->text('RangeFrom')->nullable();
            $table->text('RangeTo')->nullable();
            $table->text('DepartmentID')->nullable();
            $table->text('DueDate')->nullable();
            $table->text('EmployeeType')->nullable();
            $table->text('Experience')->nullable();
            $table->text('NumberOfEmplyoee')->nullable();
            $table->text('qualification')->nullable();
            $table->text('Gender')->nullable();
            $table->text('Age')->nullable();
            $table->text('DrivingLicense')->nullable();
            $table->text('Description')->nullable();
            $table->text('HideShow')->nullable();
            $table->text('Token')->nullable();
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
        Schema::dropIfExists('job_requesting');
    }
}
