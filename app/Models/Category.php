<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function scopeSearch($query){
        $query->when(request('keyword'),function($q){
            $keyword = request('keyword');
            $q->orWhere("title", "like", "%$keyword%");
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function type(){
        return $this->hasMany(Type::class);
    }

}
