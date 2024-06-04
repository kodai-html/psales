<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComparedProductDetail extends Model
{
    use HasFactory;
    protected $table = 'compared_product_details';
    // protected $fillable = ['behavior', 'type', 'int_value', 'str_value', 'remarks']; 
}
