<?php

namespace App\Http\Controllers\Api;

use App\Service\Api\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends BaseController
{
    //
    public function lists(){
        ProjectService::listAll();
    }

    public function create(Request $request){
        $id = ProjectService::post($request->all());
        if($this->isId($id)){
            $this->success($id);
        }
        $this->retError();
    }
}
