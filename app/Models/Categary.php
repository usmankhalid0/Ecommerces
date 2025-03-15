<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categary extends Model
{
    use HasFactory;
    protected $table = 'categaries';
    protected $fillable = [
        'categaryName',
        'amount',
        'price',
        'description',
        'product_id',
        'vendor_id',
    ];
}
