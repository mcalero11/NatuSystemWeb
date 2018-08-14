<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DetalleCompra extends Pivot
{
    protected $table = 'detalle_compras';
}
