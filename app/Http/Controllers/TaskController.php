<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliverable;
use App\Employee;
use App\Project;
use App\Month;
use App\Task;
use App\Http\Requests\TaskStoreValidation;


class TaskController extends Controller
{
    public function index(){

        $employees = Employee::Select('id', 'name')->get();
        $months = Month::Select('id', 'name')->get();
        $projects = Project::Select('id', 'name')->get();
        $deliverables = Deliverable::Select('id', 'name')->get();
        


        return view('tasks.index',compact('employees', 'months', 'projects', 'deliverables'));
  
    }


    public function store_task(TaskStoreValidation $request){

          $task = new Task ;

      $task->employee_id = $request->employee_id;
      $task->month_id = $request->month_id;
      $task->title = $request->title;
      $task->description = $request->description;
      $task->url = $request->url;
      $task->module = $request->module;
      $task->deliverable_id = $request->deliverable_id;
      $task->project_id = $request->project_id;

      $task->save();
      

       
        
        return redirect()->back();

    }



    public function tasks_monitring(Request $request){

        $months = Month::Select('id', 'name')->get();

        if($request->has('month_id')){

            $currnt_month_tasks = Task::Where('month_id',$request->month_id)->get();
            $not_yet = Employee::WhereNotIn('id', $currnt_month_tasks->pluck('employee_id'))->get();
            

        }else{

            $currnt_month_tasks = Task::Where('month_id',$request->month_id)->latest(5);
            
        }

        return \view('tasks.monitring', compact('currnt_month_tasks', 'months', 'not_yet'));
      

    }
}
