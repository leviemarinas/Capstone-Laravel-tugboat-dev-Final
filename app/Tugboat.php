<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugboat extends Model
{
    protected $table = 'tbltugboat';
    public $primaryKey = 'intTugboatID';
    protected $fillable = [
        'intTTugboatMainID',
        'intTTugboatSpecsID',
        'intTTugboatClassID',
        'boolDeleted',
    ];

    public function tugboatmainspecifications(){
        return $this->belongsTo('App\TugboatMainSpecifications','intTTugboatMainID');
    }
    public function tugboatspecifications(){
        return $this->belongsTo('App\TugboatSpecifications','intTTugboatSpecsID');
    }
    public function tugboatclass(){
        return $this->belongsTo('App\TugboatClass','intTTugboatClassID');
    }
}
