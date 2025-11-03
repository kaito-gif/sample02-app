<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // 書籍1件に、複数の著者が紐づくことを定義する
    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class, 'author_book', 'book_id', 'author_id')->withTimestamps();
    }
}
