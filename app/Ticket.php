<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

   protected $fillable = [
       'title',
       'message',
       'status',
       'priority',
       'category_id',
       'sender_id',
       'recipient_id'
    ];
}
