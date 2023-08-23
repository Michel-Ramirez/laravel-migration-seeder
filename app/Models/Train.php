<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function isTimely()
    {

        // if ($this->is_deleted) {
        //     return $this->is_timely = '';
        // } else {

        // }
        return $this->is_timely ? 'IN RITARDO' : 'IN ORARIO';
    }

    public function isDeleted()
    {
        return $this->is_deleted ? 'CANCELLATO' : 'IN TRANSITO';
    }
}
