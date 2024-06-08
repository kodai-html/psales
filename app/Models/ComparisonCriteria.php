<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComparisonCriteria extends Model
{
    use HasFactory;
    protected $table = 'comparison_criteria';
    protected $fillable = ['id', 'company_id', 'proposed_product_id', 'proposed_product_detail_id', 'attribute']; 

}
