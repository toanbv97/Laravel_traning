<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //lien ket model voi model
    function users(){
        return $this->hasmany('App\User');
     

    }
}
