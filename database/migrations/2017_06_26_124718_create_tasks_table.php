<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksTable extends Migration {

	public function up()
	{
		Schema::create('tasks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->string('name', 255);
			$table->text('description');
			$table->integer('assignee_id')->unsigned();
			$table->integer('assigner_id')->unsigned();
			$table->integer('status_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('tasks');
	}
}