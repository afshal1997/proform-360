<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('banner');
            $table->text('banner_text');
            $table->string('section_heading1');
            $table->string('section_sub_heading1');
            $table->text('section_paragraph1');
            $table->string('section_heading2');
            $table->string('section_sub_heading2');
            $table->text('section_paragraph2');
            $table->string('section_heading3');
            $table->text('section_paragraph3');
            $table->string('section_heading4');
            $table->text('section_paragraph4');
            $table->string('section_image');
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
        Schema::dropIfExists('homes');
    }
}
