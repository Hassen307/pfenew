<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    public function users()
{
    return $this->belongsTo('App\User','role_id','id');
}
public function permissions()
    {
        return $this->belongsToMany('App\Permission','permission_role','role_id', 'permission_id');
    }
}
