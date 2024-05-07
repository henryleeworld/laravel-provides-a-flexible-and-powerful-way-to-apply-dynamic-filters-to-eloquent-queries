<?php

namespace App\Models;

use Filterable\Interfaces\Filterable as FilterableInterface;
use Filterable\Traits\Filterable as FilterableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements FilterableInterface
{
    use FilterableTrait, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['title', 'content', 'user_id', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
