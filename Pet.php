<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'idade', 'especie', 'raca', 'peso', 'cliente_id'
    ];

    /**
     * Define a relação de um pet com o seu dono (cliente).
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    /**
     * Define a relação de um pet com seus atendimentos.
     */
    public function atendimentos()
    {
        return $this->hasMany(Atendimento::class);
    }
}
?>