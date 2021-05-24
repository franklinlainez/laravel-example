<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    //protected $primaryKey = 'name';
    //protected $primaryKey = false;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['name', 'founded', 'description'];

    protected $hidden = ['updated_at'];

    protected $visible = ['name', 'founded', 'description'];

    public function carmodels()
    {
        return $this->hasMany(CarModel::class);
    }

    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id', //Foreign key on CarModel table
            'model_id' //Foreign key on Engine table
        );
    }

    public function productionDate()
    {
        return $this->hasOneThrough(CarProductionDate::class,
        CarModel::class,
        'car_id',
        'model_id');
    }
}
