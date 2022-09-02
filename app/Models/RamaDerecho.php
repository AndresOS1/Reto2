<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RamaDerecho extends Model
{
    use HasFactory;

    protected $table  = "rama_derechos";

    protected $primaryKey = "id_rama";


    protected $fillable = ['nombre_rama'];

    protected $hidden = ['id_rama'];
}
