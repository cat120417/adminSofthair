<?php

namespace App\Repositories;

use App\Models\Funcionario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FuncionarioRepository
 * @package App\Repositories
 * @version August 11, 2020, 1:23 am UTC
 *
 * @method Funcionario findWithoutFail($id, $columns = ['*'])
 * @method Funcionario find($id, $columns = ['*'])
 * @method Funcionario first($columns = ['*'])
*/
class FuncionarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'endereco',
        'telefone'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Funcionario::class;
    }
}
