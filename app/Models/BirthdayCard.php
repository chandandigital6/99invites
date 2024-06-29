<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthdayCard extends Model
{
    use HasFactory;
   protected $guarded=['id'];


    public function cardType()
    {
        return $this->belongsTo(CardType::class, 'cardType_id');
    }
}
