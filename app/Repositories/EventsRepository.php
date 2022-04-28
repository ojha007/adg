<?php

namespace App\Repositories;

use App\Abstracts\Repository;
use App\Models\Events;

class EventsRepository extends Repository
{

    public function __construct(Events $model)
    {
        $this->model = $model;
    }

}
