<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->text('post_judul');
            $table->text('post_slug');
            $table->longText('post_body');
            $table->string('post_headerfoto');
            $table->string('post_status');
            $table->string('post_code');
            $table->dateTime('post_tanggalpublish');

            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->unsignedBigInteger('detail_id')->nullable();
            $table->unsignedBigInteger('gambar_id')->nullable();

            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
            $table->foreign('detail_id')->references('id')->on('detail')->onDelete('cascade');
            $table->foreign('gambar_id')->references('id')->on('gambar')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('post');
    }
}
