<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  //
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
      'title', 'ISBN', 'excerpt', 'reviews', 'pages', 'org_price', 'curr_value', 'published'
    ];
   public function authorBooks()
    {
        return $this->hasMany(AuthorBook::class);
    }
}
