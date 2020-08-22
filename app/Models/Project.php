<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;
    protected $table = 'projects';

    public function couponCards(){
        return $this->hasMany(CouponCard::class);
    }
}
