<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $primaryKey = 'post_idFk';
    protected $table = 'Bids';
}
