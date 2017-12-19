<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaceColTable extends Migration
{
    const DEFAULT = 0;
    const ENUM_DEFAULT = 1;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_col', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('name',50)->default(static::DEFAULT)->comment('姓名');
            $table->timestamps();
            $table->softDeletes();
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_col');
    }
}
