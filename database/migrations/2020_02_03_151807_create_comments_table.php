<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
			
            $table->increments('id');
            
			$table->integer('task_id')->unsigned();
			$table->foreign('task_id')->references('id')->on('tasks');
            
			$table->integer('creator_id')->unsigned();
			$table->foreign('creator_id')->references('id')->on('users');
            
            $table->text('comment');
            
			$table->timestamp('created_at', 0)->nullable();
			$table->timestamp('updated_at', 0)->nullable();
			$table->timestamp('deleted_at', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
