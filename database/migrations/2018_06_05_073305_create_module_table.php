<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->comment('模块名称');
            $table->integer('module_id')->defalut(0)->comment('父级ID');
            $table->integer('project_id')->comment('所属项目ID');
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
        Schema::dropIfExists('api_modules');
    }
}
