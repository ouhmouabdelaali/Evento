<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes

class Category extends Model
{
    use HasFactory;
    use SoftDeletes; // Add SoftDeletes trait

    protected $fillable = [
        'name',
        'description',
        'photo',
    ];

    /**
     * Accessor for the 'photo' attribute.
     * Retrieves the full URL of the category's photo.
     *
     * @param  string|null  $value
     * @return string|null
     */
    public function getPhotoAttribute($value)
    {
        if ($value) {
            return Storage::url($value);
        }
        return null;
    }

    /**
     * Mutator for the 'photo' attribute.
     * Sets the path to the category's photo.
     *
     * @param  mixed  $value
     * @return void
     */
    public function setPhotoAttribute($value)
    {
        if ($value) {
            $this->attributes['photo'] = $value->store('category_photos');
        }
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function getEventsCountAttribute()
    {
        return $this->events()->count();
    }
}
