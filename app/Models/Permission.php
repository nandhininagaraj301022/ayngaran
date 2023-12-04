<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
   
    protected $table = 'permissions';
    protected $fillable = ['user_role', 'page_id','action_name','status'];
}