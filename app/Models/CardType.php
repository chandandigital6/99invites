<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardType extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}