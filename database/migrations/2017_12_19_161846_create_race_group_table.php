<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaceGroupTable extends Migration
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
        Schema::create('race_group', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->dateTime('start_at')->comment('开始时间');
            $table->integer('user_id',false,true)->default(static::DEFAULT)->comment('组别');
            $table->string('distance',50)->default(static::DEFAULT)->comment('距离');
            $table->string('elevation',50)->default(static::DEFAULT)->comment('海拔');
            $table->string('fee',50)->default(static::DEFAULT)->comment('报名费');
            $table->string('start_line',50)->default(static::DEFAULT)->comment('起点');
            $table->string('qualification',50)->default(static::DEFAULT)->comment('资格');
            $table->string('time_limit',50)->default(static::DEFAULT)->comment('限时');
            $table->string('quota',50)->default(static::DEFAULT)->comment('限额');
            $table->string('route',2000)->default(static::DEFAULT)->comment('路线');
            $table->timestamps();
            $table->softDeletes();
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_group');
    }
}
