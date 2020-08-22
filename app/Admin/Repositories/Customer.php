<?php

namespace App\Admin\Repositories;

use App\Models\Customer as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Customer extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
