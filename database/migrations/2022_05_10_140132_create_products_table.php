<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_produk', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->integer('discount');
            $table->string('thumbnail');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('seller_id')->references('id')->on('tbl_user');
            $table->foreign('category_id')->references('id')->on('tbl_kategory');
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
        Schema::dropIfExists('tbl_produk');
    }
};
