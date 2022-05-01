<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class);
    }

    public function operations()
    {
        return $this->belongsToMany('App\Models\Operation', 'operations_roles', 'role_id', 'operation_id');
    }

    public function hasOperation($operation)
    {
        if ($this->operations()->where('operation', $operation)->first()) {
            return true;
        }
        return false;
    }

}
