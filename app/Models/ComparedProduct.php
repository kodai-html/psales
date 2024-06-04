<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComparedProduct extends Model
{
    use HasFactory;

    protected $table = 'compared_products';
    protected $fillable = ['id', 'proposed_id', 'company_id', 'name', 'remarks']; 
}
