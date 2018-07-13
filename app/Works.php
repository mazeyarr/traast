<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    public function project()
    {
        return $this->hasOne(Projects::class, 'id', 'project_id');
    }
}
