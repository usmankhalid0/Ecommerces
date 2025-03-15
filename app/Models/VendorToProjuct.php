<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorToProjuct extends Model
{
    use HasFactory;
    protected $table = 'vendor_to_projuct';
    protected $fillable = [
        'user_id',
        'product_id',
        'categary_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Categary::class, 'categary_id'); // Check spelling, it should be 'category_id'
    }
}
