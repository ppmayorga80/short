<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlTransformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_transforms', function (Blueprint $table) {
            $table->increments('id');

            $table->text('original_url');
            $table->string('short_url',10);
            $table->integer('user_id');
            $table->string('tag',10);
            $table->integer('clicks');

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
        Schema::drop('url_transforms');
    }
}
