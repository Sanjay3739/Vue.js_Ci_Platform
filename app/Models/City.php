<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $primaryKey = 'city_id';

    protected $fillable = [
        'country_id', 'name'
    ];

    public function Country() {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function User() {
        return $this->hasMany(User::class, 'city_id');
    }
}
