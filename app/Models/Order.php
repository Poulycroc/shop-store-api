<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Product;

class Order extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['adresse', 'ref'];


    public function products() {
        return $this->belongsToMany(Product::class, 'ordered_product');
    }

    public function seller() {
        return $this->belongsTo(User::class, 'seller_id');
    }
}