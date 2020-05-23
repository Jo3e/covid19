<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Patient extends Model
{
    protected $table = "patients";

    protected $fillable = [
      'p_name', 'p_gender', 'p_address',
      'p_phone', 'p_email', 'n_name',
      'n_gender', 'n_address', 'n_phone',
    ];

    public function scopegetTotalPatientNumber()
    {
      return $totalPatient = DB::table('patients')->count();
    }
}
