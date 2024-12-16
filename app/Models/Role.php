<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    public function faculties()
    {
        return $this->hasMany(Faculty::class);
    }
}
