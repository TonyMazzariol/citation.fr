<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Authors;

class Quotes extends Model
{
    use HasFactory;

    // public $timestamps = falses;

    /**
     * Get the Authors  that owns the Quotes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Authors ()
    {
        return $this->belongsTo(Authors::class);
    }
}
