<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/6
 * Time: 1:48
 */

namespace App\Service\Api;


use App\Models\TaskCookie\Task;

class TaskService
{
    public static function lists(){

    }

    public static function post($params){
        if(isset($params['id'])){
            $model = Task::find($params['id']);
            $model->content = $params['content'];
            $model->module_id = $params['module_id'];
            $model->project_id = $params['project_id'];
            $model->todo_user = $params['todo_user'];
            if($model->save()){
                return $params['id'];
            }
        }else{
            $model = Task::create([
                "content" => $params['content'],
                "module_id" => $params['module_id'],
                "project_id" => $params['project_id'],
                "todo_user" => $params['todo_user'],
            ]);
            if(!empty($model)){
                return $model->id;
            }
        }
    }
}