<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */

class Event extends Model
{

    public $timestamps = false;
    protected $table = 'events';

    protected $fillable = [
        'name',
    ];

    public function Workshops()
    {
        //return $this->hasMany(Workshop::class, 'event_id', 'id');

        return $this->hasMany('App\Models\Workshop', 'event_id', 'id');

    }

}
