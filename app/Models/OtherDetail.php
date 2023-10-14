<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherDetail extends Model
{
    use HasFactory;

    protected $fillable = ['behavior', 'type', 'int_value', 'str_value', 'remarks']; 
}
