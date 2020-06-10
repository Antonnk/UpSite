<?php

namespace Domain\Content\Models;

use Domain\Content\Traits\Contentable;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use Contentable;

    protected $guarded = [];

    protected $table = "content";

    public function contentable()
    {
        return $this->morphTo();
    }
}
