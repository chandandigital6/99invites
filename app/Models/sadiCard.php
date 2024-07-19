<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sadiCard extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function cardType()
    {
        return $this->belongsTo(CardType::class,'cardType_id');
    }

    public function sadiCardDetails(){
        return $this->hasMany(sadiCardDetails::class,'sadiCard_id');
    }
}
