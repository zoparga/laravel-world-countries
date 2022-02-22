<?php

namespace zoparga\WorldCountry\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorldCountry extends Model
{
    use HasFactory;

    public $table = 'worldcountries_table';

    protected $fillable = [
        'code',
        'name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
