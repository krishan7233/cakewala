<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'subcat_slug','name', 'description', 'photo', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


//     public function products()
// {
//     return $this->belongsToMany(Product::class, 'product_subcategory');
// }


}
