<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    
    
    protected $fillable = ['name'];

    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }



  

    /**
     * Get the users that belong to the role.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
