<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tasks Monitring</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    </head>
    <body>
    <div class="container">
        <div class="row">


        <div class="col-md-6">
            <form  method="GET" action="{{route('tasks-monitring')}}">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Month</label>
                    <select name="month_id" class="form-control" id="exampleFormControlSelect1">
                    <option  value="">Select Month</option>
                        @foreach($months as $month)
                            <option value="{{$month->id}}">{{$month->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>    
                </div>
            </form>
        </div>
        <div class="col-md-6">
<br>
        <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="names" data-content="@foreach($not_yet as $names) {{$loop->iteration}}-{{$names->name}} @endforeach">{{$not_yet->count()}} Employees Doesn't Submit</button>

        </div>

            <div class="col-md-12">
              
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Month</th>
                    <th scope="col">Title</th>
                    <th scope="col">Documents</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($currnt_month_tasks as $currnt_month_task)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$currnt_month_task->employee->name}}</td>
                    <td>{{$currnt_month_task->month->name}}</td>
                    <td>{{$currnt_month_task->title}}</td>
                    <td>
                    <a href="{{$currnt_month_task->url}}" class="btn btn-primary"target="_blanck">open</a>    
                    </td>
                  </tr>
                @endforeach
                    
                </tbody>
              </table>
                
            </div>
        </div>
    </div>



<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover(); 
});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   
    </body>
</html>
