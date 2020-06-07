<?php


namespace Domain\Site\DTOs;


use Spatie\DataTransferObject\DataTransferObject;

class SiteData extends DataTransferObject
{
    public $name;

    public $slug;

    public $theme;

    public $user_id;
}
