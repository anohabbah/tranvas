<?php

namespace App\Modules;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'address', 'latitude', 'longitude', 'started_at', 'ended_at', 'user_id'];

    /**
     * An Event is created by an User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
