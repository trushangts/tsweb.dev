<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Departments');                
    }

    public function saveDepartment($data)
    {
        //$this->user_id = auth()->user()->id;
        $this->name = $data['name'];
        $this->status = $data['status'];
        $this->save();
        return 1;
    }

}
