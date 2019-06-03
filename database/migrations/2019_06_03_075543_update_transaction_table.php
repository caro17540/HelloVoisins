<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction', function (Blueprint $table) {
			$table->BigInteger('id_user1')->unsigned()->change();
			$table->BigInteger('id_user2')->unsigned()->change();
			$table->BigInteger('id_skill1')->unsigned()->change();
			$table->BigInteger('id_skill2')->unsigned()->change();
            $table->foreign('id_user1')->references('id')->on('users');
			$table->foreign('id_user2')->references('id')->on('users');
			$table->foreign('id_skill1')->references('id')->on('skill');
			$table->foreign('id_skill2')->references('id')->on('skill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction', function (Blueprint $table) {
            $table->dropForeign([id_user1]);
			$table->dropForeign([id_user2]);
			$table->dropForeign([id_skill1]);
			$table->dropForeign([id_skill2]);
        });
    }
}
