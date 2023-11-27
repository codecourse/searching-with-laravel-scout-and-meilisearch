<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];

    public function shouldBeSearchable()
    {
        return $this->published === true;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
