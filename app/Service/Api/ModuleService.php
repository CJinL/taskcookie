<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/6
 * Time: 1:37
 */

namespace App\Service\Api;


use App\Models\TaskCookie\Module;

class ModuleService
{
    public static function post($params){
        if(!empty($params['id'])){
            $model = Module::find($params['id']);
            $model->name = $params['name'];
            $model->project_id = $params['project_id'];
            $model->module_id = intval($params['module_id']);
            if($model->save()){
                return $params['id'];
            }
        }else{
            $data = [
                'name' => $params['name'],
                'project_id' => $params['project_id'],
                'module_id' => intval($params['module_id']),
            ];
            $model = Module::create($data);
            if(!empty($model)){
                return $model->id;
            }
        }
    }

    public static function lists(){
        $array = [
            'title' => [
                ['name' => 'ID', 'key' => 'id', 'type' => 'text'],
                ['name' => '模块名称', 'key' => 'name', 'type' => 'text'],
                ['name' => '上级模块', 'key' => 'module_id', 'type' => 'text'],
                ['name' => '所属项目', 'key' => 'project_id', 'type' => 'text'],
            ],
            'body' => []
        ];
        $data = Module::all();
        $array['body'] = $data;
        return $array;
    }
}