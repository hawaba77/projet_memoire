<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributeurProjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributeur_projet', function (Blueprint $table) {
            $table->foreignId("contributeur_id")->constrained("contributeurs");;
            $table->foreignId("projet_id")->constrained("projets");;
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
        Schema::table('contributeur_projet', function (Blueprint $table) {
            $table->dropForeign(["contributeur", "projet_id"]);
        });
        Schema::dropIfExists('contributeur_projet');
    }
}
