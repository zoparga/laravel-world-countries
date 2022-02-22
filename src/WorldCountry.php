<?php

namespace zoparga\WorldCountry;

class WorldCountry
{
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
