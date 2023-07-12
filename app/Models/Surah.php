<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ayat;

class Surah extends Model
{
    use HasFactory;

    public function ayats()
    {
        return $this->hasMany(Ayat::class);
    }
}
