<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyTable extends Migration
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
        Schema::create('apply', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->integer('group_id')->default(static::DEFAULT)->comment('组别id');
//            $table->text('apply_require')->comment('报名要求');
            $table->string('name')->default(static::DEFAULT)->comment('姓名');
            $table->string('email')->unique()->default(static::DEFAULT)->comment('邮箱');
            $table->enum('certificate',[1,2])->default(static::ENUM_DEFAULT)->comment('证件：1/身份证 2/护照');
            $table->string('certificate_number')->default(static::DEFAULT)->comment('证件号码');
            $table->string('phone')->unique()->default(static::DEFAULT)->comment('手机号码');
            $table->dateTime('birthday')->comment('出生日期');
            $table->enum('gender',[1,2])->default(static::ENUM_DEFAULT)->comment('性别：1/男 2/女');
            $table->enum('region_country',[1,2,3])->default(static::ENUM_DEFAULT)->comment('地区国家：1/大陆 2/港澳台 3/境外');
            $table->string('contact_name')->default(static::DEFAULT)->comment('紧急联系人');
            $table->string('contact_phone')->default(static::DEFAULT)->comment('紧急联系人号码');
            $table->timestamps();
            $table->softDeletes();
            $table->index('name');
            $table->index('certificate_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply');
    }
}
