<?php
/**
 * Created by PhpStorm.
 * User: Maicon
 * Date: 22/02/2016
 * Time: 11:12
 */

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = "telefones";

    protected $fillable = [
        'pessoa_id',
        'descrição',
        'codpaís',
        'ddd',
        'prefixo',
        'sufixo'
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function getNumeroAttribute()
    {
        return "{$this->codpaís} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
}