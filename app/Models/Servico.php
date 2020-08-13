<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Servico
 * @package App\Models
 * @version August 11, 2020, 4:45 am UTC
 *
 * @property string nome
 * @property string preco
 */
class Servico extends Model
{
    use SoftDeletes;

    public $table = 'servicos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nome',
        'preco'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'preco' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'preco' => 'required'
    ];

    
}
