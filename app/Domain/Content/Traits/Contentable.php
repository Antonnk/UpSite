<?php

namespace Domain\Content\Traits;

use Domain\Content\Models\Content;

trait Contentable
{
    public function content()
    {
        return $this->morphMany(Content::class, 'contentable');
    }
}
