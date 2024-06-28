<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function cardTypes()
    {
        return $this->hasMany(CardType::class);
    }
}
