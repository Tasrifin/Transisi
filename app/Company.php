<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'logo'
    ];

    protected $hidden = [];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'company_id', 'id');
    }
}
