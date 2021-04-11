<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->text('JobReqId')->nullable();
            $table->text('DepartmentID')->nullable();
            $table->text('Name')->nullable();
            $table->text('Position')->nullable();
            $table->text('NrcNumber')->nullable();
            $table->text('JobType')->nullable();
            $table->text('ExpectedSalary')->nullable();
            $table->text('DateOfplace')->nullable();
            $table->text('MaritalStatus')->nullable();
            $table->text('Region')->nullable();
            $table->text('Experience')->nullable();
            $table->text('Reason')->nullable();
            $table->text('Religion')->nullable();
            $table->text('License')->nullable();
            $table->text('Gender')->nullable();
            $table->text('CvFormUpload')->nullable();
            $table->text('Description')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
