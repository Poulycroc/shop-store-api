<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Product;

class Shop extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shops';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','logo','url'];

    /**
     * Many-to-Many relations with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function owners() {
        return $this->belongsToMany(User::class, 'ownered_shop');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
