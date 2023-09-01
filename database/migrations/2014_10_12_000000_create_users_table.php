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
            $table->string('email')->unique();
            $table->string('type')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('date')->nullable();
            $table->string('city')->nullable();
            $table->string('bride_first_name')->nullable();
            $table->string('bride_last_name')->nullable();
            $table->string('bride_email')->nullable();
            $table->string('bride_phone')->nullable();
            $table->string('groom_first_name')->nullable();
            $table->string('groom_last_name')->nullable();
            $table->string('groom_email')->nullable();
            $table->string('groom_phone')->nullable();
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
        Schema::dropIfExists('users');
    }
}
