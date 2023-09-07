<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nft;

class Owners extends Model
{
    use HasFactory;

    public function collection(){
        return $this -> hasMany(Nft::class);
    }
}
