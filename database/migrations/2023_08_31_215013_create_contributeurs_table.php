<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributeurs', function (Blueprint $table) {
            $table->id();
            $table->string('attribute');

            $table->foreignId("users_id")->constrained("users");
            $table->timestamps();
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
        schema::table('contributeurs', function (Blueprint $table) {
            $table->dropForeign('users_id');
        });
        Schema::dropIfExists('contributeurs');
    }
}
