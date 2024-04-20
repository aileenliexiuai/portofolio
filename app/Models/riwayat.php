<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\Lang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class riwayat extends Model
{
    use HasFactory;

    protected $table = "riwayat";
    protected $fillable = ['judul', 'tipe', 'starteddate', 'enddate', 'info1', 'info2', 'info3', 'isi'];
    protected $casts = [
        'enddate' => 'date', // Specify that 'enddate' should be cast to a date
        'starteddate' => 'date', // Specify that 'starteddate' should be cast to a date
    ];

    public function getFormattedEndDateAttribute()
    {
        if (!is_null($this->enddate)) {
            return $this->enddate->format('F Y');
        } else {
            return 'Present';
        }
    }

    public function getFormattedStartedDateAttribute()
    {
        return $this->starteddate->format('F Y');
    }
}
    
