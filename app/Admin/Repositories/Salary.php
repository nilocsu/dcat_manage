<?php

namespace App\Admin\Repositories;

use App\Models\Salary as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Salary extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
