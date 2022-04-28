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
}
