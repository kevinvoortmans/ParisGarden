<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->json('name');
            $table->json('url');
            $table->longText('body');
            $table->unsignedInteger('template_id');
            $table->foreign('template_id')->references('id')->on('templates');
            $table->json('seo_title')->nullable();
            $table->json('seo_description')->nullable();
            $table->json('seo_image')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
