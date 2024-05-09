<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    use HasFactory;

    protected $guarded = [];
    public int $qualiteEns;
    public int $infrastructure;
    public int $recherche;
    public int $isertionPro;
    public int $internaute_id;
    public int $university_id;
    public function Internaute()
    {
        return $this->belongsTo(Internaute::class);
    }
    
    public function University()
    {
        return $this->belongsTo(University::class);
    }
}
