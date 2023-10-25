<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'rooms',
        'beds',
        'bathrooms',
        'mq',
        'address',
        'lat',
        'lon',
        'photo',
        'visible'
    ];

    public static function generateSlug(string $name)
    {
        return Str::slug($name, '-');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public function services()
    {
        return $this->belogsToMany(Service::class);
    }

    public function sponsorships()
    {
        return $this->belogsToMany(Sponsorship::class);
    }
}
