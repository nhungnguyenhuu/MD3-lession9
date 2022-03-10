<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name'
    ];
}
