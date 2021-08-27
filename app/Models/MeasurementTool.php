<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeasurementTool extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'serial_no',
        'model',
        'manufacturer',
        'manufactured_date',
        'purchase_price',
        'purchase_date',
        'supplier_id',
        'department_id',
        'operator_id',
        'action_manager_id',
        'status',
        'description'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'manufactured_date' => 'datetime',
        'purchase_date' => 'datetime',
        'purchase_price' => 'array',
    ];

    //MEASUREMENT TOOL TYPE
    public function type()
    {
        return $this->belongsTo(MeasurementToolType::class,'measurement_tool_type_id','id')->withDefault(['name' => 'Undefined']);
    }

    //SUPPLIER
    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplier_id','id')->withDefault(['name' => 'Undefined']);
    }

    //DEPARTMENT
    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id')->withDefault(['name' => '']);
    }

    //OPERATOR
    public function operator()
    {
        return $this->belongsTo(User::class,'operator_id','id')->withDefault(['name' => 'Undefined']);
    }

    //ACTION MANAGER
    public function actionManager()
    {
        return $this->belongsTo(User::class,'action_manager_id','id')->withDefault(['name' => 'Undefined']);
    }
}
