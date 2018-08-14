<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DetalleRequisicion extends Pivot
{
    protected $table = 'detalle_requisiciones';
}
