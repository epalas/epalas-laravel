<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Util extends Authenticatable
{
    use Notifiable;

    protected $table = 'utils';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom','email', 'mdp', 'adresse', 'cp', 'ville', 'pays', 'admin', 'urlPhoto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'mdp', 'remember_token', 'updated_at', 
    ];


    public function getAuthPassword()
    {
      return $this->mdp;
    }

    public function vin() {
        return $this->belongsToMany('App\Vin');
    }

    public function note() {
        return $this->hasMany('App\Note');
    }

    public function comm() {
        return $this->hasMany('App\Comm');
    }

    public function art() {
        return $this->belongsToMany('App\Art');
    }
}
