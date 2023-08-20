<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Likey extends Model
{
    use HasFactory;

    public function createNewRecord($u_id, $prod_id){

    }

    public function collectUserLike($u_id, $prod_id){

        $like = DB::table('likeys')->where('user_id', $u_id);

        if(!$like){
            $this->createNewRecord($u_id, $prod_id);
        }

    }

    

}
