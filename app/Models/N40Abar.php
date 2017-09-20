<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class N40Abar extends Model
{
    protected $table = 'N40_ABAR';

    protected $fillable = ['ID', 'N40_BAR_KODAS', 'N40_KODAS_PS', 'N40_KODAS_US', 'N40_USERIS', 'N40_R_DATE',
        'N40_ADDUSR'
    ];

}
