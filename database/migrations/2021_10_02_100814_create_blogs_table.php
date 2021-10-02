<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->text('short_description')->nullable();
            $table->text('description'); 
            $table->text('quote')->nullable();
            $table->string('thumbnail');
            $table->string('image')->nullable();
            $table->enum('payment_status',['paid','pending'])->default('pending');
            $table->enum('access_status',['published','not_published'])->default('not_published');
            $table->foreign('subcategory_id')
                  ->references('id')->on('sub_categories')
                  ->onDelete('cascade');
                  
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
        Schema::dropIfExists('blogs');
    }
}
