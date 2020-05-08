<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $table = 'certifications';

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
