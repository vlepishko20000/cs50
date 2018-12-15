<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
            $table->increments('id');
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->integer('adult_count')->nullable();
            $table->integer('childs_count')->nullable();
            $table->integer('contact_number');
            $table->boolean('checked')->default(false);
            $table->timestamps();
             
        });
        // Schema::create('posts', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('title')->nullable();
        //     $table->string('slug')->unique();
        //     $table->text('excerpt')->nullable();
        //     $table->text('content')->nullable();
        //     $table->timestamp('published_at')->nullable();
        //     $table->boolean('published')->default(false);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
