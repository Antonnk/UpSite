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

    /** @var string|null */
    public $description;

    public function __construct(string $name, string $type, string $title, ?string $description = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->title = $title;
        $this->description = $description;
    }

    public static function create(string $name, string $type, string $title, ?string $description = null)
    {
        return new self(...func_get_args());
    }
}
