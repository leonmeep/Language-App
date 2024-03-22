<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function friends(): BelongsToMany
    {
        return $this->belongsToMany(Friend::class);
    }
}
