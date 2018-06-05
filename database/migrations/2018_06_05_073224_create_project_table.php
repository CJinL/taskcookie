<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->comment('项目名称')->unique();
            $table->string('people', 50)->comment('负责人');
            $table->date('plan_start_time')->nullable()->comment('计划开始时间');
            $table->date('plan_end_time')->nullable()->comment('计划结束时间');
            $table->date('real_start_time')->nullable()->comment('实际开始时间');
            $table->date('real_end_time')->nullable()->comment('实际结束时间');
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
        Schema::dropIfExists('api_projects');
    }
}
