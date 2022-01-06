<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class tache extends Model
{
    use HasFactory,Notifiable;
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom_tache',
        'description',
        'date_debut',
        'date_fin',
        'FK_etat',
    ];

}
