<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->bigInteger('id_user1');
			$table->bigInteger('id_user2');
			$table->bigInteger('id_skill1');
			$table->bigInteger('id_skill2');
			$table->enum('status1', ['ET', 'TT']);
			$table->enum('status2', ['ET', 'TT']);
			$table->enum('status', ['AR', 'AC', 'R', 'V', 'T']);
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
        Schema::dropIfExists('transaction');
    }
}
