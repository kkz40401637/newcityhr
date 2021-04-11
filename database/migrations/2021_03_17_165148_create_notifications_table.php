<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->text('Model')->nullable();
            $table->text('MId')->nullable(); //
            $table->text('Type')->nullable();
            $table->text('UId')->nullable();
            $table->text('SeenUnseen')->nullable();
            $table->text('Description')->nullable();
            $table->text('Reject')->nullable();
            $table->text('Approved')->nullable();
            $table->text('Meet')->nullable();
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
        Schema::dropIfExists('notifications');
    }
}
