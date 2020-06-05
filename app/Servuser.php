<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use \Venturecraft\Revisionable\RevisionableTrait;

class Servuser extends Model
{
    use RevisionableTrait;

    use SoftDeletes;

    protected $revisionCreationsEnabled = true;

    protected $revisionNullString = 'Rien';
    protected $revisionUnknownString = 'unconnu';
    
    protected $table = 'servicy_user';


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function servicy()
    {
        return $this->belongsTo('App\Servicy');
    }

    public function guardies()
    {
        return $this->hasMany('App\Guardy');
    }



}
