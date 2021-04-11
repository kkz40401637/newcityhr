<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->text('EmployeeID')->nullable();
            $table->text('BankName')->nullable();
            $table->text('BranchName')->nullable();
            $table->text('BranchCode')->nullable();
            $table->text('AccountTitle')->nullable();
            $table->text('AccountNumber')->nullable();
            $table->text('AccountType')->nullable();
            $table->text('PayAccountPhoneNo')->nullable();
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
        Schema::dropIfExists('employee_bank_accounts');
    }
}
