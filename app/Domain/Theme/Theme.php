<?php

namespace Domain\Theme;

class Theme
{
    /** @var string */
    public $name;

    /** @var string */
    public $title;

    /** @var \Domain\Theme\Section[] */
    public $sections;

    public function __construct(string $name, string $title, array $sections)
    {
        $this->name = $name;
        $this->title = $title;
        $this->sections = $sections;
    }

    public static function create(string $name, string $title, array $sections)
    {
        return new self($name, $title, $sections);
    }
}
