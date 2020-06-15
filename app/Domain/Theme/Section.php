<?php

namespace Domain\Theme;

class Section
{
    /** @var string */
    public $name;

    /** @var string */
    public $title;

    /** @var string */
    public $description;

    /** @var \Domain\Theme\Field[] */
    public $fields;

    public function __construct(string $name, string $title, string $description, array $fields)
    {
        $this->name = $name;
        $this->title = $title;
        $this->description = $description;
        $this->fields = $fields;
    }

    public static function create(string $name, string $title, string $description, array $fields)
    {
        return new self(...func_get_args());
    }
}
