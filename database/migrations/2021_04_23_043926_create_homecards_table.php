<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homecards', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('heading');
            $table->text('text');
            $table->boolean('status')->default(true);
            $table->integer('created_by',false)->nullable();
            $table->integer('updated_by',false)->nullable();
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
        Schema::dropIfExists('home_cards');
    }
}
