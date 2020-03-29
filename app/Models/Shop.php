<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Role extends Model {
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
    protected $fillable = ['name'];

    /**
     * Many-to-Many relations with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function owners() {
        return $this->belongsToMany(User::class, 'ownered_shop');
    }

}