<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriPostsTable extends Migration
{
    public function up()
    {
        Schema::create('kategori_post', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->unsignedBigInteger('post_id')->nullable();

            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('post')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategori_post');
    }
}
