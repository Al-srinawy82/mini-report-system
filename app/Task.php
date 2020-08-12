<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function employee(){

        return $this->belongsTo('App\Employee', 'employee_id');
    }

    public function month(){

        return $this->belongsTo('App\Month', 'month_id');
    }

    public function project(){

        return $this->belongsTo('App\Project', 'project_id');
    }


    public function deliverables(){

        return $this->belongsTo('App\Deliverable', 'deliverable_id');
    }

}
