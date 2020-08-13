<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version August 11, 2020, 3:46 am UTC
 *
 * @property string nome
 * @property string telefone
 * @property string endereco
 * @property string email
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nome',
        'telefone',
        'endereco',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'telefone' => 'string',
        'endereco' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'telefone' => 'required',
        'endereco' => 'required',
        'email' => 'required'
    ];

    
}
