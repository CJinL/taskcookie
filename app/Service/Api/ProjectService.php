<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/5
 * Time: 10:00
 */

namespace App\Service\Api;


use App\Models\TaskCookie\Project;

class ProjectService
{
    public static function post($params){
        if(!empty($params['id'])){
            $model = Project::find($params['id']);
            $model->name = $params['name'];
            $model->people = $params['people'];
            if($model->save()){
                return $params['id'];
            }
        }else{
            $model = Project::create([
                'name'=>$params['name'],
                'people'=>$params['people'],
            ]);
            if(!empty($model)){
                return $model->id;
            }
        }
    }


    /**
     *
     * tableData:{
     * title:[{name:'标题1', key:'content', type:'progress'}, {name:'标题2', key:'key', type:'text'}],
     * body:[{content:50, key:'8888'}, {content:50, key:'8888'}, {content:50, key:'8888'}]
     * },
     *
     * @return array
     */
    public static function listAll(){
        $array = [
            'title' => [
                ['name' => 'ID', 'key' => 'id', 'type' => 'text'],
                ['name' => '项目名称', 'key' => 'name', 'type' => 'text'],
                ['name' => '负责人', 'key' => 'people', 'type' => 'text'],
            ],
            'body' => []
        ];
        $data = Project::all();
        $array['body'] = $data;
        return $array;
    }
}