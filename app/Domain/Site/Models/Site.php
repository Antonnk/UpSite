<?php


namespace Domain\Site\Models;


use Domain\Content\Models\Content;
use Domain\Theme\Theme;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Site
 * @property int id
 * @property string slug
 * @property string name
 * @property string theme
 * @property Content content
 */
class Site extends Model
{
    protected $guarded = [];

    public function content()
    {
        return $this->hasOne(Content::class);
    }

    public function getThemeDefinitionAttribute(): Theme
    {
        $definitions = require_once app_path('../Domain/Theme/definitions.php');

        return collect($definitions)->filter(function (Theme $theme) {
           return $theme->name ===  $this->theme;
        })->first();
    }
}
