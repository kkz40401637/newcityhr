<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->text('EmployeeID')->nullable();
            $table->text('Degree')->nullable();
            $table->text('Subject')->nullable();
            $table->text('Institute')->nullable();
            $table->text('Grade')->nullable();
            $table->text('GraduationYear')->nullable();
            $table->text('AttachedFile')->nullable();
            $table->text('FromYear')->nullable();
            $table->text('ToYear')->nullable();
            $table->text('Highest')->nullable();
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
        Schema::dropIfExists('qualifications');
    }
}
