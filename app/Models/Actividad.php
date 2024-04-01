<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividad
 *
 * @property $id
 * @property $nombre
 * @property $dia
 * @property $horario
 * @property $created_at
 * @property $updated_at
 *
 * @property ActividadAnimal[] $actividadAnimals
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actividad extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'dia', 'horario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividadAnimals()
    {
        return $this->hasMany(\App\Models\ActividadAnimal::class, 'id', 'actividad_id');
    }
    

}
