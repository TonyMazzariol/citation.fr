<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quotes;

class Authors extends Model
{
    use HasFactory;

    // public $timestamps = false;

    /**
     * Get all of the Quotes for the Authors
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Quotes(): HasMany
    {
        return $this->hasMany(Quotes::class);
    }
}
