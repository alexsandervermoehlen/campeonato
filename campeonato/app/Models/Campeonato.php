<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    use HasFactory;

    protected $table = 'tbcampeonato';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = true;
    protected $attributes = [
        'id' => 0
    ];
    protected $hidden = [
        'id',
    ];
    protected $fillable = [
        'id',
        'nome'
    ];
}
