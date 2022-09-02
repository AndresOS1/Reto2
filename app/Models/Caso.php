<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    use HasFactory;

    
    protected $table  = "casos";

    protected $primaryKey = "id_caso";


    protected $fillable = ['descripcion_caso','instancia_id'];

    protected $hidden = ['id_caso'];
}
