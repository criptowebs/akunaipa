<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesPublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices_publications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('publication_id')->references('id')->on('publications')->onDelete('cascade');
            $table->string('name', 50);
            $table->bigInteger('price');
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
        Schema::dropIfExists('prices_publications');
    }
}
