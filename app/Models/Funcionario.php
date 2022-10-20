<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'id_cargo');
    }
    
}
