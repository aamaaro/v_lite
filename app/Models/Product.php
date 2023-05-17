<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'barcode', 'cost', 'stock', 'price', 'alerts', 'image', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function sale_details() {
        return $this->hasMany(SaleDetail::class);
    }
    public function getImagenAttribute() {
        if ($this->image === null)
            return 'noimg.png';
        elseif
        (file_exists('storage/products/' . $this->image))
            return $this->image;
        else
            return 'noimg.png';
    }
}
