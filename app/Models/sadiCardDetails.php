<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sadiCardDetails extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function sadiCard(){
        return $this->belongsTo(sadiCard::class);
    }
}
