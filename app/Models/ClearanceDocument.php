<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClearanceDocument extends Model
{
    use HasFactory;
   
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date'; 


    protected $guarded = []; 


    public function psstation(){
        return $this->belongsTo(PsStationName::class,'ps_name_id','id');

    }

    public function assign_officer(){
        return $this->belongsTo(AssignOfficerName::class,'assign_officer_id','id');
    }

   

}
