<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['nome', 'matricula', 'cpf', 'telefone', 'email', 
        'cep', 'logradouro', 'complemento', 'bairro', 'uf', 'municipio'];
}
