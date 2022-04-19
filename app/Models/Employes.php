<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    use HasFactory;
    protected $fillable =[
        'mail',
        'mot de passe',
        'first name',
        'last name',
        'adresse',
        'numero du tel'
    ];
}
