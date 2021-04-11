<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->text('BuID')->nullable();
            $table->text('StationType')->nullable();
            $table->text('StationName')->nullable();
            $table->text('ParentStation')->nullable();
            $table->text('CurrencyUse')->nullable();
            $table->text('CurrencySymbol')->nullable();
            $table->text('Address')->nullable();
            $table->text('PhoneNumber')->nullable();
            $table->text('FaxNumber')->nullable();
            $table->text('EmailAddress');
            $table->text('WebSite')->nullable();
            $table->text('AdditionalNote')->nullable();
            $table->text('images')->nullable();
            $table->integer('Status'); //(1)
            $table->integer('RegId')->nullable();;
            $table->integer('UpdId')->nullable();;
            $table->integer('HideShow');//( 1 = show , 0 = hide )
            $table->text('Token');
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
        Schema::dropIfExists('stations');
    }
}
