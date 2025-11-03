<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Author extends Model
{
    use HasFactory;

    public function detail(): HasOne
    {
        return $this->hasOne(AuthorDetail::class, 'author_id', 'id');
    }

    public function books(): BelongsToMany
    {
        // 著者1人に、複数の書籍が紐づくことを定義する
        return $this->belongsToMany(Book::class, 'author_book', 'author_id', 'book_id')->withTimestamps();
    }
}
