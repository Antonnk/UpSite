<?php

namespace Domain\Content\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array payload
 */
class Content extends Model
{
    protected $guarded = [];

    protected $table = 'content';

    protected $casts = [
        'payload' => 'array'
    ];
}
