<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_activitites', function (Blueprint $table) {
            $table->increments('id')->unique()->index();
            $table->string('title', 50);
            $table->string('description');
            $table->bigInteger('subject_id')->unsigned()->index()->nullable();
            $table->string('subject_type')->index()->nullable();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
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
        Schema::dropIfExists('log_activites');
    }
}
