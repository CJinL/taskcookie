<?php

namespace App\Http\Controllers\Api;

use App\Service\Api\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends BaseController
{
    //
    public function lists(){
        $data = ProjectService::listAll();
        return $this->success($data);
    }

    public function create(Request $request){
        $id = ProjectService::post($request->all());
        if($this->isId($id)){
            return $this->success($id);
        }
        return $this->retError();
    }
}
