<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Role;

class Permission extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'pattern', 'target', 'module', 'display_name', 'status'];

    public static function displayable() {
        $prepared_array = [];
        $temp = self::orderBy('module')->get()->toArray();
        foreach ($temp as $sin) {
            $prepared_array[$sin['module']][] = $sin;
        }
        return $prepared_array;
    }
    public function scopeActive($query) {
        return $query->whereStatus('1');
    }

    public function roles() {
        return $this->belongsToMany(Role::class, 'permission_roles');
    }
}