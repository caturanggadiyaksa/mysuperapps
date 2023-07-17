<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AuthorizedApp extends Model
{
    // use HasFactory;

    protected $connection = 'mysql';

    
    protected $fillable = [
        'client_id', 'client_secret', 'name', 'redirect_uri',
    ];


}
