<?php


namespace Domain\Site\Models;


use Domain\Content\Models\Content;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function content()
    {
        return $this->hasMany(Content::class);
    }
}
