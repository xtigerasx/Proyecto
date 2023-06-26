<?php

namespace App\Models;

use App\Http\Controllers\Profesores;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table= 'profesores';
    protected $primaryKey = 'codprofesor';
    public $timestamps = true;
}
