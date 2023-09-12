<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nft;

class Category extends Model
{
    use HasFactory;
        /**
         * Get all of the comments for the Category
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */

        // Relation avec la table NFT
        // Une catégory  peut posséder plusieurs Nft
        public function nft(): HasMany
        {
            return $this->hasMany(Nft::class);
        }

}
