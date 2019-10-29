<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Champion extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'title', 'description', 'image'
    ];

    public function championSkills(){
        return $this->hasMany('App\ChampionSkill', 'champ_id');
    }
}
