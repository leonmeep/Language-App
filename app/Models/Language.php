<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Language extends Model
{
    use HasFactory;

    public function difficulty(): BelongsTo
    {
        return $this->belongsTo(Difficulty::class);

    }

    public function continent(): BelongsTo
    {
        return $this->belongsTo(Continent::class);

    }
}
