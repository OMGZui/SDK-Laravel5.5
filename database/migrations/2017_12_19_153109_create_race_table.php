<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaceTable extends Migration
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
        Schema::create('race', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->integer('user_id',false,true)->default(static::DEFAULT)->comment('用户id');
            $table->integer('col_id',false,true)->default(static::DEFAULT)->comment('集合id');
            $table->string('cover')->default(static::DEFAULT)->comment('封面');
            $table->string('region',50)->default(static::DEFAULT)->comment('地区');
            $table->string('name',50)->default(static::DEFAULT)->comment('比赛名称');
            $table->string('en_name',50)->default(static::DEFAULT)->comment('比赛英文名称');
            $table->tinyInteger('type')->default(static::DEFAULT)->comment('比赛类型');
            $table->enum('estimate',[1,2])->default(static::ENUM_DEFAULT)->comment('证件：1/已发布 2/预计');
            $table->dateTime('date')->comment('比赛日期');
            $table->string('address')->default(static::DEFAULT)->comment('比赛地址');
            $table->string('url',50)->default(static::DEFAULT)->comment('官网网址');
            $table->string('desc')->default(static::DEFAULT)->comment('简介');
            $table->string('app_desc',2000)->default(static::DEFAULT)->comment('app简介');
            $table->string('contact',50)->default(static::DEFAULT)->comment('联系方式');
            $table->timestamps();
            $table->softDeletes();
            $table->index('user_id');
            $table->index('col_id');
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
        Schema::dropIfExists('race');
    }
}
