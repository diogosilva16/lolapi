<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChampionSkill extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'small_name', 'name', 'description', 'champ_id', 'image'
    ];

}
