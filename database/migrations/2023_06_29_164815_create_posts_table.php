<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_title');
            $table->text('ticket_body');
            $table->string('CustomerName');
            $table->string('ticket_status');
            $table->string('Dept');
            $table->boolean('is_highimpact');
            $table->string('ticket_problem');
            $table->string('ticket_action');
            $table->unsignedBigInteger('auth_user_id');
            $table->timestamps();

            $table->foreign('auth_user_id')->references('id')->on('users');
        });
        
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
