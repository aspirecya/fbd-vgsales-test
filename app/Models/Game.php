<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'platform',
        'release_year',
        'genre',
        'publisher',
        'rank',
        'na_sales',
        'eu_sales',
        'jp_sales',
        'other_sales',
        'global_sales'
    ];
}
