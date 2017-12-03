<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('mail');
            $table->string('phone');
            $table->text('zoo');
            $table->string('birthday');
            $table->boolean('is_visible');
            $table->string('photo');
            $table->string('buque');
            $table->string('fams');
            $table->string('mail_gadz');
            $table->string('bande');
            $table->string('boquette');
            $table->text('bouls');
            $table->string('localisation');
            $table->string('job');
            $table->string('solde');
            $table->boolean('is_admin');
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
        Schema::dropIfExists('user_profiles');
    }
}
