<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CuentaPorCobrar extends Pivot
{
    protected $table = 'cuentas_por_cobrar';
}
