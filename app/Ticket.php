<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    protected $dates = ['deleted_at'];

   protected $fillable = [
       'title',
       'message',
       'status',
       'priority',
       'category_id',
       'sender_id',
       'ticket_id'
    ];
}
