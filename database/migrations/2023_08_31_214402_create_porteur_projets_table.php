<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePorteurProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porteur_projets', function (Blueprint $table) {
            $table->id();
            $table->string('description');
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
        Schema::table('porteur_projets', function (Blueprint $table) {
            $table->dropForeign('users_id');
        });
        Schema::dropIfExists('porteur_projets');
    }
}
