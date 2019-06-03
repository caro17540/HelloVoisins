<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('message', function (Blueprint $table) {
            $table->BigInteger('id_transaction')->unsigned()->change();
            $table->BigInteger('id_sender')->unsigned()->change();
            $table->BigInteger('id_receiver')->unsigned()->change();
            $table->foreign('id_transaction')->references('id')->on('transaction');
            $table->foreign('id_sender')->references('id')->on('users');
            $table->foreign('id_receiver')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('message', function (Blueprint $table) {
            $table->dropForeign(['id_transaction']);
            $table->dropForeign(['id_sender']);
            $table->dropForeign(['id_receiver']);
        });
    }
}
