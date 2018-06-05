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
        if(isset($params['id'])){
            $model = new Project();
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
            return $model->id;
        }
    }

    public static function listAll(){
        return Project::paginate();
    }
}