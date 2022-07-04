<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Chat extends Model
{
    use HasFactory;

    public function members(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, ChatUser::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
