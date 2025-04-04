<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class User extends Model
{
    use HasFactory;

    /**
     * Get the comments for the blog post.
     */
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
