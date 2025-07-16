<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StaffWorkingHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'day_of_week',
        'start_time',
        'end_time',
    ];

    /**
     * علاقة مع الموظف
     */
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
