<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;
    public function bookshelfs(): BelongsTo {
        return $this->belongsTo(BookShelf::class, 'bookshelfs_id');
    }

    protected $fillable = [
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'quantity',
        'bookshelfs_id',
        'cover'
    ];
}
