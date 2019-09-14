<?php

namespace Fikrimi\Pipe\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];
    public $incrementing = false;

    public function credential()
    {
        return $this->belongsTo(Credential::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function builds()
    {
        return $this->hasMany(Build::class);
    }
}
