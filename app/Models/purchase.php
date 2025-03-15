<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor', 'make', 'model', 'color', 'mileage', 
        'specification', 'engine_size', 'base_price', 'status'
    ];

    // Relationship with PurchaseImage
    public function images()
    {
        return $this->hasMany(PurchaseImage::class);
    }
}
