<?php
/**
 * Created by PhpStorm.
 * User: Maicon
 * Date: 22/02/2016
 * Time: 11:10
 */

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }
}