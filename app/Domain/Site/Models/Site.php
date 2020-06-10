<?php


namespace Domain\Site\Models;


use Domain\Content\Models\Content;
use Domain\Content\Traits\Contentable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Site
 * @property string slug
 * @property string name
 * @property string theme
 */
class Site extends Model
{
    use Contentable;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
