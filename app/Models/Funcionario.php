<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Funcionario
 * @package App\Models
 * @version August 11, 2020, 1:23 am UTC
 *
 * @property string nome
 * @property string endereco
 * @property string telefone
 */
class Funcionario extends Model
{
    use SoftDeletes;

    public $table = 'funcionarios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nome',
        'endereco',
        'telefone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'endereco' => 'string',
        'telefone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'endereco' => 'required',
        'telefone' => 'required'
    ];

    
}
