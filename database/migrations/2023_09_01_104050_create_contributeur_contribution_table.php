<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributeurContributionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributeur_contribution', function (Blueprint $table) {
            $table->foreignId("contributeur_id")->constrained("contributeurs");
            $table->foreignId("contribution_id")->constrained("contributions");;
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
        Schema::table('contributeur_contribution', function (Blueprint $table) {
            $table->dropForeign(["contributeur", "contribution_id"]);
        });

        Schema::dropIfExists('contributeur_contribution');
    }
}
