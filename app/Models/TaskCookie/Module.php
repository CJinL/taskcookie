<?php

namespace App\Models\TaskCookie;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'api_modules';
    protected $fillable = ['name', 'module_id', 'project_id'];
    //
}
