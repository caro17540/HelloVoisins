<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    protected $primaryKey = 'id';
    protected $fillable = ['text'];

    public function messageTransaction()
    {
        return $this->belongsTo('App\Transaction', 'id_transaction');
    }
    public function userSender()
    {
        return $this->belongsTo('App\User', 'id_sender');
    }
    public function userReceiver()
    {
        return $this->belongsTo('App\User', 'id_receiver');
    }
}
