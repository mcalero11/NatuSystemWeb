<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DetalleVenta extends Pivot
{
    protected $table = 'detalle_ventas';
}
