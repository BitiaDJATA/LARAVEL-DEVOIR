<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Internaute extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function Commentaire()
    {
        return $this->hasMany(Commentaire::class);
    }
    public function Notation()
    {
        return $this->hasMany(Notation::class);
    }
}
