<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuDe extends Model
{
    protected $table = 'chude';

    public function courseid()
    {
        return $this->belongsTo(KhoaHoc::class);
    }
}
