<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'apartment_id',
        'ip',
        'date'
    ];

    public function apartment()
    {
        return $this->belognsTo(Apartment::class);
    }
}
