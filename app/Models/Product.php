<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Order;
use App\Models\Category;

class Product extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'price', 'description'];

    public function orders() {
        return $this->belongsToMany(Order::class, 'ordered_product');
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'categorized_product');
    }

    public function scopeCategorized($query, Category $category=null) 
    {
      if ( is_null($category) ) return $query->with('categories');

      $categoryIds = $category->getDescendantsAndSelf()->lists('id');

      return $query->with('categories')
                   ->where('category_id', $categoryIds);
    }
}