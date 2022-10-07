<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $table = "customers";

    // protected $guarded = ["id"];

    protected $primaryKey = "customer_id";

    protected $fillable = [
        'title', 
        'fname', 
        'lname',
        'addressline',
        'town',
        'zipcode',
        'phone',
        'creditlimit',
        'level',
        'user_id'
    ];

    public $timestamps = false;
}