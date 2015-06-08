<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	public function up() {
			
			Schema::create('users', function($table){

			$table->increments('id');
			$table->string('username',100);
			$table->string('password',100);
			$table->string('remember_token',100)->nullable();
		});

	}

	public function down() {
		
		Schema::drop('users');
	}

}
