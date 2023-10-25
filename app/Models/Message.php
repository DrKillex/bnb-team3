<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'apartment_id',
        'name',
        'lastname',
        'email',
        'text',
    ];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
