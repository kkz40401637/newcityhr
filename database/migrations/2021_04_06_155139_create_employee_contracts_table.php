<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_contracts', function (Blueprint $table) {
            $table->id();
            $table->text('ContractID')->nullable();
            $table->text('EmployeeName')->nullable();
            $table->text('EmployeeID')->nullable();
            $table->text('ContractType')->nullable();
            $table->text('ContractTitle')->nullable();
            $table->text('EmployeeDesignation')->nullable();
            $table->text('ContractStartDate')->nullable();
            $table->text('ContractEndDate')->nullable();
            $table->text('EmployeeType')->nullable();
            $table->text('EmployeeCategory')->nullable();
            $table->text('ApprovedDate')->nullable();
            $table->text('Department')->nullable();
            $table->text('EmployeeGrade')->nullable();
            $table->text('Branch')->nullable();
            $table->text('CreatedBy')->nullable();
            $table->text('CreatedDate')->nullable();
            $table->text('ApprovedPerson')->nullable();
            $table->text('AdditionalNote')->nullable();
            $table->text('ContractDescription')->nullable();
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
        Schema::dropIfExists('employee_contracts');
    }
}
