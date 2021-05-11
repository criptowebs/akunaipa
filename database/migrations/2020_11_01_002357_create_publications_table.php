<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('direction', 50);
            $table->boolean('continuos_service');
            $table->time('open', 0)->nullable();
            $table->time('closed', 0)->nullable();
            $table->bigInteger('phone');
            $table->bigInteger('whatsapp');
            $table->string('email');
            $table->text('indication', 500);
            $table->text('description', 1000);
            $table->string('slug');
            // $table->integer('images')->unsigned();
            $table->integer('state')->default(2);
            $table->integer('type')->default(0);
            $table->string('observation')->nullable();
            $table->string('services')->nullable();
            $table->unsignedBigInteger('publication_state_id')->references('id')->on('publication_states')->default(2);
            $table->unsignedBigInteger('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('categorie_id')->references('id')->on('categories');
            $table->unsignedBigInteger('municipalitie_id')->references('id')->on('municipalities');
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
        Schema::dropIfExists('publications');
    }
}
