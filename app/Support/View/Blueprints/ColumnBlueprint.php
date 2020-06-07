<?php


namespace Support\View\Blueprints;


use Closure;

class ColumnBlueprint
{
    const TYPE_DEFAULT = 'TYPE_DEFAULT';
    const TYPE_MONOTYPE = 'TYPE_MONOTYPE';
    const TYPE_DATETIME = 'TYPE_DATETIME';

    public $name;

    public $type;

    private $title;

    public $link;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->setType(self::TYPE_DEFAULT);
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function isType(string $type): bool
    {
        return $this->type === $type;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title ?? $this->name;
    }

    public function setLink(Closure $closure): self
    {
        $this->link = $closure;

        return $this;
    }
}
