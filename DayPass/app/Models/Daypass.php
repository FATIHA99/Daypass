<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daypass extends Model
{
    protected $fillable=['label','slug','lieux','description','service_price','image' ];
    use HasFactory;
        public function getRouteKeyName()
        {
                    return 'slug'; 

        }
}

