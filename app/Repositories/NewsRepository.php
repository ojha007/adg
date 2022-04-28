<?php

namespace App\Repositories;

use App\Abstracts\Repository;
use App\Models\News;

class NewsRepository extends Repository
{

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function other3News($slug)
    {
        return $this->getModel()
            ->where('slug', '!=',$slug)
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

    }
}
