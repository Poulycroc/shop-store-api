<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

use App\Models\Role;
use App\Models\Shop;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function scopeActive($query) {
        return $query->whereStatus('1');
    }
    public function scopeAdmin($query) {
        return $query->whereIsAdmin('1');
    }
    public function scopeNotify($query) {
        return $query->whereNotify('1');
    }

    public function roles() {
        return $this->belongsToMany(Role::class, 'role_users', 'user_id', 'role_id');
    }

    public function shop() {
        return $this->belongsToMany(Shop::class, 'ownered_shop');
    }

    public function attachRole($role) {
        if (is_object($role)) {
            $role = $role->getKey();
        }
        if (is_array($role)) {
            $role = $role['id'];
        }
        $this->roles()->attach($role);
    }

    public function detachRole($role) {
        if (is_object($role)) {
            $role = $role->getKey();
        }
        if (is_array($role)) {
            $role = $role['id'];
        }
        $this->roles()->detach($role);
    }

    public function attachRoles($roles) {
        foreach ($roles as $role) {
            $this->attachRole($role);
        }
    }

    public function detachRoles($roles) {
        foreach ($roles as $role) {
            $this->detachRole($role);
        }
    }

    public function isAdmin() {
        return (bool)$this->is_admin;
    }

    public function hasAccess($permissions, $all = true) {
        if ($this->isAdmin()) {
            return true;
        }
        return $this->hasPermission($permissions, $all);
    }

    public function hasPermission($permissions) {
        $mergedPermissions = $this->getMergedPermissions();
        //dd($mergedPermissions);
        if (!is_array($permissions)) {
            $permissions = (array)$permissions;
        }

        foreach ($permissions as $permission) {
            $matched = false;
            // We will set a flag now for whether this permission was
            // matched at all.
            $founded_perms = find_in($mergedPermissions, "name", $permission);
            if (!empty($founded_perms)) {
                $matched = true;
            }

        }

        if ($matched === false) {
            return false;
        }

        return true;
    }

    public function getMergedPermissions() {
        $permissions = array();
        foreach ($this->getRoles() as $group) {
            $permissions = array_merge($permissions, $group->permissions()->get()->toArray());
        }
        return $permissions;
    }

    public function getRoles() {
        $roles = [];
        if ($this->roles()) {
            $roles = $this->roles()->get();
        }
        return $roles;
    }
}
