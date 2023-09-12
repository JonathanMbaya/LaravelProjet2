<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nft;

class Owners extends Model
{
    use HasFactory;

    // Données protégé pour le login et le signup
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Relation avec la table nft
    // Un proriétaire peut posséder plusieurs Nft
    public function collection(){
        return $this -> hasMany(Nft::class);
    }
}
