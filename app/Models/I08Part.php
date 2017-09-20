<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class I08Part extends Model
{
    protected $table = 'I08_PART';

    protected $fillable = ['ID', 'I08_KODAS_PO', 'I08_EIL_NR', 'I08_NUOL_D', 'I08_NUOL_P', 'I08_MOK_D', 'I08_MOK_P',
        'I08_SUMA_PLK', 'I08_R_DATE', 'I08_USERIS', 'I08_ADDUSR', 'I08_MOK_S', 'I08_PLK_P'
    ];

}
