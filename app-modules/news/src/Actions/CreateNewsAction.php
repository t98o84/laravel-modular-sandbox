<?php

namespace Modules\News\Actions;

use Modules\News\Models\News;

class CreateNewsAction
{
    public function handle(string $title, string $content): News
    {
        return News::create([
            'title' => $title,
            'content' => $content,
        ]);
    }
}
