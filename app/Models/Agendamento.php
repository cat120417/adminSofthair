<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agendamento
 * @package App\Models
 * @version August 13, 2020, 4:09 am UTC
 *
 * @property string inicio_servico
 * @property string final_servico
 * @property string comentario
 * @property integer cliente_id
 */
class Agendamento extends Model
{
    use SoftDeletes;

    public $table = 'agendamentos';
    

    protected $dates = [    
        'inicio_servico',
        'final_servico',
        'deleted_at'];



    public $fillable = [
        'inicio_servico',
        'final_servico',
        'comentario',
        'cliente_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'inicio_servico' => 'string',
        'final_servico' => 'string',
        'comentario' => 'string',
        'cliente_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'inicio_servico' => 'required',
        'final_servico' => 'required'
    ];

    public function getStartTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setStartTimeAttribute($value)
    {
        $this->attributes['inicio_servico'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getFinishTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setFinishTimeAttribute($value)
    {
        $this->attributes['final_servico'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
    
}
