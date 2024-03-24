<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Language extends Model
{
    use HasFactory;

    public $hidden = ['created_at', 'updated_at', 'spoken_by', 'pivot', 'difficulty_id', 'continent_id', 'id'];

    public function difficulty(): BelongsTo
    {
        return $this->belongsTo(Difficulty::class);

    }

    public function continents(): BelongsTo
    {
        return $this->belongsTo(Continent::class);

    }

    public function friends(): BelongsToMany
    {
        return $this->belongsToMany(Friend::class);
    }
}
