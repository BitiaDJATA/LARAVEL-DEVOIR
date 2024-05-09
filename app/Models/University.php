<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
   private string $nomUniv;
   private string $description;
   private string $localisation;
   private string $image;

    public function Notation()
    {
        return $this->hasMany(Notation::class);
    }
    
}
