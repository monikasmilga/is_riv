<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class I33Pkai extends Model
{
    protected $table = 'I33_PKAI';

    protected $fillable = ['ID', 'I33_KODAS_PS', 'I33_KODAS_IS', 'I33_KODAS_US', 'I33_KAINA', 'I33_KAINA_NEW',
        'I33_PPK', 'I33_PPK_DATE', 'I33_KODAS_VL', 'I33_PPK_VAL', 'I33_PPK_SAV', 'I33_PPK_SAV_DATE', 'I33_ADDUSR',
        'I33_USERIS', 'I33_R_DATE', 'I33_FORMATAS', 'I33_POZ', 'I33_KAINA_BAZ', 'I33_POZ_POS'
    ];

}
