<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use phpDocumentor\Reflection\Types\Boolean;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = ['title', 'genre_id', 'author',  'available'];


    /**
     * @return BelongsToMany
     */
   public function user(): BelongsToMany
   {
       return $this->belongsToMany(User::class, 'rents', 'book_id', 'user_id');
   }

    /**
     * Converting to boolean
     *
     * @param $value
     * @return bool
     */
    public function getAvailableAttribute($value)
    {
        return boolval($value);
    }

    /**
     * Converts from false to tinyInt
     *
     * @param $value
     */
    public function setAvailableAttribute($value)
    {
        if($value == 'true' ) {
            $this->attributes['available'] = 1;
        }else{
            $this->attributes['available'] = 0;
        }

    }

    /**
     * @return BelongsTo
     */
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

}
