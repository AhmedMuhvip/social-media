<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestStatus extends Model
{
    protected $table = 'requests_status';
    protected $guarded = [];

//    protected $primaryKey = 'request_id';

    public function sender()
    {
        return $this->belongsTo(User::class, 'sending_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'received_id');
    }

}
