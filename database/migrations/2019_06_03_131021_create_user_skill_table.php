<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_skill', function (Blueprint $table) {
            $table->bigInteger('id_user')->unsigned();
			$table->bigInteger('id_skill')->unsigned();
			$table->foreign('id_user')->references('id')->on('users');
			$table->foreign('id_skill')->references('id')->on('skill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_skill');
		$table->dropForeign([id_user]);
		$table->dropForeign([id_skill]);
    }
}
