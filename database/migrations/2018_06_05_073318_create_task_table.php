<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content', 1024)->comment('任务内容');
            $table->integer('status')->default(1)->comment('任务状态{1任务创建, 2进行中, 3已完成, 4已废弃, 5已延期, 6冻结 }');
            $table->integer('module_id')->comment('所属模块');
            $table->integer('project_id')->comment('所属项目');
            $table->string('todo_user')->comment('支配给（谁做）');
            $table->dateTime('plan_start_time')->comment('计划开始时间');
            $table->dateTime('plan_end_time')->comment('计划结束时间');
            $table->dateTime('real_start_time')->comment('实际开始时间');
            $table->dateTime('real_end_time')->comment('实际结束时间');
            $table->dateTime('trash_time')->comment('废弃时间');
            $table->text('remark')->comment('公共备注');
//            $table->text('remark1')->comment('备注');
//            $table->text('remark2')->comment('备注');
//            $table->text('remark3')->comment('公共备注');
            $table->text('remark4')->comment('废弃备注');
            $table->text('remark5')->comment('延期备注');
            $table->text('remark6')->comment('冻结备注');
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
        Schema::dropIfExists('tasks');
    }
}
