<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

use App\Models\Order;
use App\Models\Category;

class Product extends Model implements HasMedia {
    use HasMediaTrait;
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

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
              ->width(200)
              ->height(200)
              ->sharpen(10);

        $this->addMediaConversion('square')
              ->width(412)
              ->height(412)
              ->sharpen(10);
    }
}