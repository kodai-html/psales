<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposedProductDetail extends Model
{
    use HasFactory;

    protected $table = 'proposed_product_details';
    protected $fillable = ['id', 'proposed_id', 'type', 'int_value', 'str_value', 'unit', 'remarks']; 
}
