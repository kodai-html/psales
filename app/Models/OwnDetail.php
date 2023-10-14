<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnDetail extends Model
{
    use HasFactory;

    protected $fillable = ['owns_id', 'behavior', 'type', 'int_value', 'str_value', 'remarks']; 
}
