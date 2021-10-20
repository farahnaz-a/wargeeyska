<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('blog_id')->nullable();
            $table->string('ad_position');
            $table->string('image');  
            $table->string('link')->nullable();  
            $table->enum('aprove_status',['pending','aproved'])->default('pending');
            $table->enum('payment_status',['pending','aproved','admin_post'])->default('pending');
            $table->enum('admin_seen_status',['unseen','seen'])->default('unseen');
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');                
            $table->foreign('blog_id')
                  ->references('id')->on('blogs')
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
        Schema::dropIfExists('ads');
    }
}
