<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EventoParticipante extends Pivot
{
    protected $table = 'evento_participante';
}
