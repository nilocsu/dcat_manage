<?php

namespace App\Admin\Repositories;

use App\Models\Project as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Project extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
