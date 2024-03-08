<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
    ];
    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class);
    }
    
    public function post(): HasMany
    {
        return $this->HasMany(Post::class);
    }
    
    public function article(): HasMany
    {
        return $this->HasMany(Article::class);
    }

    public function comment(): HasMany
    {
        return $this->HasMany(Comment::class);
    }

    public function role(): HasMany
    {
        return $this->HasMany(Role::class);
    }
}