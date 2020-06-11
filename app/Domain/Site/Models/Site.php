<?php


namespace Domain\Site\Models;


use Domain\Content\Contracts\ContentableContract;
use Domain\Content\Models\Content;
use Domain\Content\Traits\Contentable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Site
 * @property int id
 * @property string slug
 * @property string name
 * @property string theme
 */
class Site extends Model implements ContentableContract
{
    use Contentable;

    protected $guarded = [];

    public function getContentableId(): int
    {
        return $this->id;
    }

    public function getContentableType(): string
    {
        return self::class;
    }
}
