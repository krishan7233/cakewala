<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\Wishlist;
class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'subcategory_id', 'name','slug', 'short_description','long_description','status','flavours'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
    
    
      public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }

    // public function subcategories()
    // {
    //     return $this->belongsToMany(SubCategory::class, 'product_subcategory');
    // }

}
