<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conges extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_demande',
        'type_demande',
       'description',
      'date_debut',
       'date_fin',
        'heure_debut',
    'heure_fin',];
}
