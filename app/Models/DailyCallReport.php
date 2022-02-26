<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DailyCallReport extends Model {
    protected $table = 'daily_call_report';
    protected $guarded = [];

    public function doctorExists($id) {
        $doctor = $this->whereRaw('FIND_IN_SET('.$id.', visited_doctor_name)')->get();
        return ($doctor->count() > 0) ? true : false;
    }

    public function chemistExists($id) {
        $doctor = $this->whereRaw('FIND_IN_SET('.$id.', visited_doctor_name)')->get();
        return ($doctor->count() > 0) ? true : false;
    }
}