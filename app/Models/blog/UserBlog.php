<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBlog extends Model
{
    protected $connection = 'mysql_blog';
    protected $table = 'users';
    use HasFactory;
}
