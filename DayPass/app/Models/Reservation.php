<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnValue;

class Reservation extends Model
{
    				
    protected $fillable=['id','cin','email','date_entrer','date_sortie','nombre_personne','is_valid','id_user','id_daypass','services'];

    use HasFactory;
    public function user()
    {
      return $this->belongTo(User::class);
    }



}
