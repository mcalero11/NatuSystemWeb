<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UsuarioRol extends Pivot
{
    protected $table = 'usuarios_roles';
}
