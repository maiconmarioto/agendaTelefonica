<?php
namespace CodeAgenda\Entities;
use Illuminate\Database\Eloquent\Model;
class Email extends Model
{
    protected $table = 'emails';

    protected $fillable =[
        'pessoa_id',
        'descricao',
        'email',
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}