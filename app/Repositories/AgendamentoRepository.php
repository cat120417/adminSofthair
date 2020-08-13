<?php

namespace App\Repositories;

use App\Models\Agendamento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AgendamentoRepository
 * @package App\Repositories
 * @version August 13, 2020, 4:09 am UTC
 *
 * @method Agendamento findWithoutFail($id, $columns = ['*'])
 * @method Agendamento find($id, $columns = ['*'])
 * @method Agendamento first($columns = ['*'])
*/
class AgendamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'inicio_servico',
        'final_servico',
        'comentario',
        'cliente_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Agendamento::class;
    }
}
