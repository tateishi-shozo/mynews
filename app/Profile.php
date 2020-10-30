<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $gurded = array('id');
    
    protected $fillable = ['name', 'gender', 'hobby', 'introduction'];
    //
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
        
    public function records()
    {
        return $this->hasMany('App\Record');
    }
}
