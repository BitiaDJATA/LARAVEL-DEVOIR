<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    
    use HasFactory;
    protected $guarded = [];
     
    public string $message;

    public function Internautes()
    {
        return $this->belongsTo(Internaute::class);
    }
}
