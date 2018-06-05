<?php

namespace App\Models\TaskCookie;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'api_projects';
    protected $fillable = ['name', 'people'];
    public $errors = null;
    //

}
