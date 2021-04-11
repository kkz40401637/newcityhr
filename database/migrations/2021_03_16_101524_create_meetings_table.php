<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting', function (Blueprint $table) {
            $table->id();
            $table->text('Title');
            $table->text('CompanyId')->nullable();
            $table->text('StationId')->nullable();
            $table->text('DepartmentId')->nullable();
            $table->text('Participant')->nullable();
            $table->text('StartTimestemp')->nullable();
            $table->text('EndTimestemp')->nullable();
            $table->text('Location')->nullable();
            $table->text('Notes')->nullable();
            $table->text('Types')->nullable();
            $table->text('Reached')->nullable();
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
        Schema::dropIfExists('meeting');
    }
}
