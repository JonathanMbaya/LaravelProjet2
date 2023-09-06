<?php

namespace App\Models;

use App\Models\Users;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nft extends Model
{
    use HasFactory;

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function owner():BelongsTo
    {
        return $this->belongsTo(Users::class);
    }
}
