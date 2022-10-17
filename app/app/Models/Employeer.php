<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employeer extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'position_id',
        'manager_id',
        'startDate',
        'endDate'
    ];

    public function position() {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
