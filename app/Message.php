<?php

namespace HelloVoisins;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    protected $primaryKey = 'id';
    protected $fillable = ['text'];

    public function messageTransaction()
    {
        return $this->belongsTo('HelloVoisins\Transaction', 'id_transaction');
    }
    public function userSender()
    {
        return $this->belongsTo('HelloVoisins\User', 'id_sender');
    }
    public function userReceiver()
    {
        return $this->belongsTo('HelloVoisins\User', 'id_receiver');
    }
}
