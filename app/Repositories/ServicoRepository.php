<?php

namespace App\Repositories;

use App\Models\Servico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServicoRepository
 * @package App\Repositories
 * @version August 11, 2020, 4:45 am UTC
 *
 * @method Servico findWithoutFail($id, $columns = ['*'])
 * @method Servico find($id, $columns = ['*'])
 * @method Servico first($columns = ['*'])
*/
class ServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'preco'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Servico::class;
    }
}
