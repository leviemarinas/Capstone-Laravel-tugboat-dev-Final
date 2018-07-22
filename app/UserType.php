<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'tblusertype';
    protected $primaryKey = 'intUserTypeID';
    protected $fillable = [
        'intUserTypeID',
        'strUserTypeName',
        'boolDeleted',
    ];
}
