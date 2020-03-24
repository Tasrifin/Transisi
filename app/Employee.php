<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    //

    use SoftDeletes;

    protected $fillable = [
        'name', 'company_id', 'email'
    ];

    protected $hidden = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
