<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];

    /*
     * relationship between user and employee
     *
     * */
    public function user(){
        //return $this->hasOne(Employee::class,'user_id');
        return $this->belongsTo('App\User','user_id');

    }
}
