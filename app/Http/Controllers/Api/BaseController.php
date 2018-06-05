<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Response;
use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    //

    protected function retJson($status=1, $msg = '', $data = [])
    {
        return Response::json(['status'=>$status, 'msg'=> $msg, 'data' => $data]);
    }

    protected function retError($status=403, $msg = '')
    {
        return new JsonResponse($msg, $status);
    }

    protected function success($data = [])
    {
        return $this->retJson(200, '操作成功!', $data);
    }

    protected function validateError(array $error)
    {
        return new JsonResponse($error, 422);
    }


    protected function isId($id){
        if(!empty($id) && intval($id) == $id){
            return true;
        }
        return false;
    }
}
