<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id', 'data_atendimento', 'servico', 'observacao'
    ];

    /**
     * Define a relação de um atendimento com um pet.
     */
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
?>