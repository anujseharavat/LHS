<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('privilege')->comment = "0 - Guest/User | 1 - Admin";
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')
            ->insert([
                [
                    'name' => 'Admin',
                    'email' => 'admin',
                    'password' => md5('admin741'),
                    'privilege' => 1,
                ],
                [
                    'name' => 'Aleena',
                    'email' => 'alena@email.com',
                    'password' => md5('aleena741'),
                    'privilege' => 0,
                ]
            ]);
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
