<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'time'
    ];

    public function apartments()
    {
        return $this->belogsToMany(Apartment::class);
    }
}
