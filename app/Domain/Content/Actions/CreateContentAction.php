<?php


namespace Domain\Content\Actions;


use Domain\Content\Enums\ContentTypeEnum;
use Domain\Content\Models\Content;
use Illuminate\Database\Eloquent\Model;

class CreateContentAction
{
    public function execute(ContentTypeEnum $type, array $payload, Model $model): Content
    {
        return Content::create([
            'type' => $type,
            'body' => json_encode($payload),
            'contentable_id' => $model->getKey(),
            'contentable_type' => get_class($model)
        ]);
    }
}
