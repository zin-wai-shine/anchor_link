<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function scopeSearch($query){
        $query->when(request('keyword'),function($q){
            $keyword = request('keyword');
            $q->orWhere("email","like","%$keyword%")
                ->orWhere("name","like","%$keyword%");
        });
    }


}
