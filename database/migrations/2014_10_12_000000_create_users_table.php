<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->string('name');
            $table->string('username');
            $table->boolean('role'); //0 = Super Admin; 1 = Admin; 2 = Employee
            $table->string('phone_number');
            $table->string('p_address');
            $table->string('c_address');
            $table->string('city');
            $table->string('zip');
            $table->date('dob');
            $table->boolean('active_inactive');
            $table->string('reason_inactive');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
