<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'flag_concluida', 'atividade_id'
    ];

    public function atividade(){
        return $this->belongsTo(Atividade::class);
    }

}
