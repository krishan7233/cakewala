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

    protected $fillable = ['category_id', 'subcategory_id', 'name','slug','product_meta_title', 'short_description','long_description','product_type','status','flavours'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        // return $this->belongsTo(SubCategory::class);
             return $this->belongsTo(SubCategory::class, 'subcategory_id')->whereRaw('1 = 0');

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
