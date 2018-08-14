<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DetalleVendible extends Pivot
{
    protected $table = 'detalle_vendibles';
}
