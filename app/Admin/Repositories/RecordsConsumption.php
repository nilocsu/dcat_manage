<?php

namespace App\Admin\Repositories;

use App\Models\RecordsConsumption as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class RecordsConsumption extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
