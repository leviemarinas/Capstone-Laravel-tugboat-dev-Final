<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berth extends Model
{
    protected $table = 'tblberth';
    protected $primaryKey = 'intBerth_id';
    protected $fillable = [
        'intBPier_id',
        'strBerthName',
        'boolDeleted',
    ];

    public function piers()
    {
        return $this->belongsTo('App\Pier','intPier_id');
    }
}