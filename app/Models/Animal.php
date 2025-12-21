<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    /** Nom de la table associée (facultatif si suit la convention plurielle) */
    protected $table = 'animals';
    /** Clé primaire (facultatif si c’est 'id') */
    protected $primaryKey = 'id';
    /** Indique si les colonnes created_at/updated_at sont utilisées */
    public $timestamps = true;

    /** Colonnes modifiables via create() ou update() */
    protected $fillable = ['name', 'species', 'age', 'description', 'photo'];

    /** Colonnes protégées contre l’assignation de masse */
    protected $guarded = ['id'];

    /** Colonnes à cacher lors de la sérialisation (JSON, API, etc.) */
    protected $hidden = ['created_at', 'updated_at'];
    /** Colonnes visibles (si besoin de filtrer l’affichage inversement à $hidden) */
    protected $visible = ['name', 'age', 'species', 'description'];
}
