<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class RecordsConsumption extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'records_consumption';

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function adminUser(){
        return $this->belongsTo(AdminUser::class, 'user_id');
    }
}
