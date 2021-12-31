<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('userName')->unique();
            $table->string('email')->unique();
            $table->string('dob')->nullable();
            $table->tinyInteger('email_verified')->default(1)->comment = '1=Yes, 0=No';
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->tinyInteger('valid')->comment = '1=Yes, 0=No';
        });

        DB::table('users')->insert(
            array(
                'id'                => 1, 
                'name'              => 'Md.User', 
                'email'             => 'user@gmail.com', 
                'username'          => 'User', 
                'dob'               => '2020-10-14 17:38:27', 
                'email_verified'    => 1, 
                'email_verified_at' => null, 
                'password'          => bcrypt(123456),
                'remember_token'    => null, 
                'created_at'        => '2020-10-14 17:38:27', 
                'updated_at'        => '2020-10-14 17:38:27', 
                'deleted_at'        => null, 
                'valid'             => 1
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
