<?php


namespace Domain\Theme;


class Field
{
    /** @var string */
    public $name;

    /** @var string */
    public $type;

    /** @var string */
    public $title;

    public function __construct(string $name, string $type, string $title)
    {
        $this->name = $name;
        $this->type = $type;
        $this->title = $title;
    }

    public static function create(string $name, string $type, string $title)
    {
        return new self($name, $type, $title);
    }
}
