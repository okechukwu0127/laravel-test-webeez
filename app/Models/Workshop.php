<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

/**
 * Class Workshop
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $url
 *
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */

class Workshop extends Model
{
    public $timestamps = false;
    protected $table = 'workshops';

    protected $fillable = [
        'name', 'parent_id', 'url',
    ];

}
