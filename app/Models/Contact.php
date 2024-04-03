<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\JsonSerializable;

class Contact extends Model
{
    use HasFactory;

    use SoftDeletes, JsonSerializable;
    //Name, Email, Phone, Country, City, State/Region, Zip/Postal Code
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'city',
        'stateregion',
        'zippostalcode'
    ];
    protected $dates = ['deleted_at'];
}
