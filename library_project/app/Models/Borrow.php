<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Borrow extends Model
{
    //
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
