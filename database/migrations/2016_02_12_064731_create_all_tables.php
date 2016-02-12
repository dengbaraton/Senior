<?php

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Users table

        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('password', 60);
            $table->string('latitude');
            $table->string('longitude');
            $table->rememberToken();
            $table->timestamps();
        });

        // Roles table
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('description');//The role description per driver
            $table->rememberToken();
            $table->timestamps();
        });

        // automobiles table
        Schema::create('automobiles', function (Blueprint $table) {
            $table->text('automobile_id');
            $table->string('model');//The automobile model
            $table->string('description');
            $table->timestamps();
        });

        // Server_provider table
        Schema::create('service_providers', function (Blueprint $table) {
            $table->increments('server_provider_id');
            $table->integer('user_details')->unique();// user details in user table
            $table->integer('role')->unique();// role details in role table
            $table->text('automobile');// automobiles ownership
            $table->boolean('active');// this column describe the activation of the driver to be shown
            $table->rememberToken();
            $table->timestamps();
        });

        // Requests table
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('request_id');
            $table->interger('user')->unique();// user details in user table
            $table->interger('server_provider')->unique();
            $table->boolean('request_status');// this column describe the activation of the driver to be shown
            $table->string('comments');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('phone_number')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('users');
        //Schema::drop('automobiles');
        //Schema::drop('roles');
        //Schema::drop('server_provider');
        //Schema::drop('requests');
        //Schema::drop('password_resets');

    }
}
