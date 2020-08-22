<?php

namespace App\Admin\Repositories;

use App\Models\CouponCard as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CouponCard extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
