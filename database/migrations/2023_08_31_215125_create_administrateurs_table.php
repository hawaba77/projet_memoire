<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            // $table->timestamps();

            $table->foreignId("users_id")->constrained("users");
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('administrateurs', function (Blueprint $table) {
            $table->dropForeign('users_id');
        });


        Schema::dropIfExists('administrateurs');
    }
}
