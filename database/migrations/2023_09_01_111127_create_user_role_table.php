<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->foreignId("users_id")->constrained("users");
            $table->foreignId("role_id")->constrained("roles");
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::table('user_role', function (Blueprint $table) {
            $table->dropForeign("users_id");
            $table->dropForeign("role_id");
        });
        Schema::dropIfExists('user_role');
    }
}
