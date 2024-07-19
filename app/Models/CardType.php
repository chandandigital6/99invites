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

    public function birthdayCards()
    {
        return $this->hasMany(BirthdayCard::class, 'cardType_id'); // Ensure this matches the column name in the birthday_cards table
    }

    public function sadiCard()
    {
        return $this->hasMany(sadiCard::class, 'cardType_id'); // Ensure this matches the column name in the birthday_cards table
    }
}
