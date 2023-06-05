<?php

namespace App\Models;

use App\Http\Controllers\Facultades;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
   protected $table= 'facultades';
   protected $primaryKey = 'codfacultad';
   public $timestamps = true;
}
