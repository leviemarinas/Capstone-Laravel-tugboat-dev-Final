<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pier extends Model
{
    protected $table = 'tblpier';
    protected $primaryKey = 'intPier_id';
    protected $fillable = [
        'strPierName',
        'boolDeleted',
    ];

    public function berth()
    {
        return $this->hasMany('App\Berth','intBPier_id');
    }   
}
