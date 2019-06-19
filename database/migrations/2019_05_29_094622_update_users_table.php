<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // 
			$table->renameColumn('name', 'login');
			$table->string('firstname');
			$table->string('lastname');
			$table->longText('description');
			$table->string('role', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
			 $table->renameColumn('login', 'name');
			 $table->dropColumn(['firstname','lastname','description','role']);
        });
    }
}