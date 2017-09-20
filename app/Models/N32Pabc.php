<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class N32Pabc extends Model
{
    protected $table = 'N32_PABC';

    protected $fillable = ['ID', 'N32_KODAS_PS', 'N32_KODAS_US', 'N32_TIPAS', 'N32_G_DATE', 'N32_KAINA1', 'N32_KAINA2',
        'N32_KIEKIS2', 'N32_KAINA3', 'N32_KIEKIS3', 'N32_KAINA4', 'N32_KIEKIS4', 'N32_USERIS', 'N32_R_DATE',
        'N32_ADDUSR', 'N32_ID'
    ];

}
