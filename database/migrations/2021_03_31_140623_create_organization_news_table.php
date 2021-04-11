<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_news', function (Blueprint $table) {
            $table->id();
            $table->text('Title')->nullable();
            $table->text('Description')->nullable();
            $table->text('BranchId')->nullable();
            $table->text('RegId')->nullable();
            $table->text('UpdId')->nullable();
            $table->text('HideShow')->nullable();
            $table->text('Status')->nullable();
            $table->text('Token')->nullable();
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
        Schema::dropIfExists('organization_news');
    }
}
