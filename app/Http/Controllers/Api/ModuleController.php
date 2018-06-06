<?php

namespace App\Http\Controllers\Api;

use App\Service\Api\ModuleService;
use Illuminate\Http\Request;

class ModuleController extends BaseController
{
    public function lists(){
        $data = ModuleService::lists();
        return $this->success($data);
    }

    public function create(Request $request){
        $id = ModuleService::post($request->all());
        if($this->isId($id)){
            return $this->success($id);
        }
        return  $this->retError();
    }

}
