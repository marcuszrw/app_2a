<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'email', 'telefone', 'endereco'
    ];

    /**
     * Define a relação de um cliente com seus pets.
     */
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
?>