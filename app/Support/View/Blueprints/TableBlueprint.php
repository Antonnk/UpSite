<?php


namespace Support\View\Blueprints;


use Illuminate\Contracts\Support\Arrayable;

class TableBlueprint
{
    private $columns;

    private $data;

    public function setColumns(array $columns): self
    {
        $this->columns = $columns;

        return $this;
    }

    public function setData(Arrayable $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getColumns(): array
    {
        return $this->columns;
    }

    public function getData(): Arrayable
    {
        return $this->data;
    }

    public function isEmpty(): bool
    {
        return count($this->getData()->toArray()) === 0;
    }
}
