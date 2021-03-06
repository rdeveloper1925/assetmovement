<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $primaryKey='CompID';
    protected $table='computers';
    protected $fillable=array(
        'CompName','IP','Manufacturer','Model','OS','AssTag','Capacity','Processor','SN','branch'
    );

    public function branch(){
        return $this->belongsTo('App\Branch');
    }
}
