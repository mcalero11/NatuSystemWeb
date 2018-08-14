<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TipoClienteDescuento extends Pivot
{
    protected $table = 'tipoclientes_descuentos';
}
