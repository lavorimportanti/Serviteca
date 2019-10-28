<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    //
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'document',
        'email',
        'created_at',
        'updated_at',
        'deleted_at',

    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
