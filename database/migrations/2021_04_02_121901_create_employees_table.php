<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_info', function (Blueprint $table) {
            $table->id();
            $table->text('Profile')->nullable();
            $table->text('No')->nullable();
            $table->text('UserId')->nullable();
            $table->text('Name')->nullable();
            $table->text('NameMM')->nullable();
            $table->text('Type')->nullable();
            $table->text('CardId')->nullable();
            $table->text('JobField')->nullable();
            $table->text('PositionLevel')->nullable();
            $table->text('Designation')->nullable();
            $table->text('JobStatus')->nullable();
            $table->text('WageType')->nullable();
            $table->text('Grade')->nullable();
            $table->text('JoinDate')->nullable();
            $table->text('WorkShift')->nullable();
            $table->text('WorkSchedule')->nullable();
            $table->text('ResontoJoin')->nullable();
            $table->text('PhoneNumber')->nullable();
            $table->text('Section')->nullable();
            $table->text('Department')->nullable();
            $table->text('BusinessUnit')->nullable();
            $table->text('Station')->nullable();
            $table->text('OfficeEmail')->nullable();
            $table->text('ReportTo')->nullable();
            $table->text('NotificationEmail')->nullable();
            $table->text('OfficePhone')->nullable();
            $table->text('DateOfBirth')->nullable();
            $table->text('BirthOfPlace')->nullable();
            $table->text('Gender')->nullable();
            $table->text('MaritalStatus')->nullable();
            $table->text('BloodGroup')->nullable();
            $table->text('DateMarriage')->nullable();
            $table->text('Nationality')->nullable();
            $table->text('Religion')->nullable();
            $table->text('Race')->nullable();
            $table->text('personalEmail')->nullable();
            $table->text('NrcNumber')->nullable();
            $table->text('NrcNumberMM')->nullable();
            $table->text('PassportNumber')->nullable();
            $table->text('PassportExpiration')->nullable();
            $table->text('DrivingLicenseExpiration')->nullable();
            $table->text('HaveDrivingLicense')->nullable();
            $table->text('DrivingLicenseNumber')->nullable();
            $table->text('StrongPoint')->nullable();
            $table->text('WeakPoint')->nullable();
            $table->text('HaveFatalAccident')->nullable();
            $table->text('FatalAccidentDescription')->nullable();
            $table->text('HaveMajorSurgery')->nullable();
            $table->text('MajorSurgeryDescription')->nullable();
            $table->text('HaveHospitalization')->nullable();
            $table->text('HospitalizationDescription')->nullable();
            $table->text('CurrentAddress')->nullable();
            $table->text('CurrentAddressMM')->nullable();
            $table->text('PermanentAddress')->nullable();
            $table->text('PermanentAddressMM')->nullable();
            $table->text('DiscType')->nullable();
            $table->text('DiscTestDate')->nullable();
            $table->text('Information')->nullable();
            $table->integer('RegId')->nullable();
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
        Schema::dropIfExists('employees_info');
    }
}



