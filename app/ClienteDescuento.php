<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ClienteDescuento extends Pivot
{
    protected $table = 'clientes_descuentos';
}
