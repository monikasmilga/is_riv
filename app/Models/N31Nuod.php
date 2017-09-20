<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class N31Nuod extends Model
{
    protected $table = 'N31_NUOD';

    protected $fillable = ['ID', 'N31_KODAS_NS', 'N31_EIL_NR', 'N31_MINIMUM', 'N31_NUOL_PROC', 'N31_USERIS',
        'N31_R_DATE', 'N31_ADDUSR'
    ];

}
