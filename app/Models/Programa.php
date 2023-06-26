<?php

namespace App\Models;

use App\Http\Controllers\Programas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table= 'programas';
    protected $primaryKey = 'codprograma';
    public $timestamps = true;
}
