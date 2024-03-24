<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Friend extends Model
{
    use HasFactory;

    public $hidden = ['created_at', 'updated_at', 'email', 'id', 'pivot'];
    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);

    }
}
