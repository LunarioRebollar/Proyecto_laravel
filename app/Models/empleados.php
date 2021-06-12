<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $fillable = ['nombre','apellido_paterno','apellido_materno','area_trabajo','sueldo_dia','dias_trabajados','total_neto','total','bruto'];
}
