<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Permission;

class Role extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'display_name', 'description'];

    public function scopeActive($query) {
        return $query->whereStatus('1');
    }

    /**
     * Many-to-Many relations with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users() {
        return $this->belongsToMany(User::class, 'role_users');
    }

    public function permissions() {
        return $this->belongsToMany(Permission::class, 'permission_roles');
    }

}