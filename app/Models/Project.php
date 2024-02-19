<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumb',
        'description',
        'type_id',

    ];

    public function type(){
        return $this->belongsto(Type::class);
    }
}
