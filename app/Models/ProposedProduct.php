<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposedProduct extends Model
{
    use HasFactory;

    protected $table = 'proposed_products';
    protected $fillable = ['id', 'name', 'company_id', 'remarks']; 
    
}
