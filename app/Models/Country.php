<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'latitude'
    ];

    public function location(){
        return $this->hasOne(Location::class, 'country_id');
    }
}
