<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Tasks Monitring</title>

    <!-- Icons font CSS-->
    <link href="/form/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/form/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/form/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/form/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/form/css/main.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Tasks Monitring</h2>
                </div>
                <div class="card-body" style="padding-right: 30px !important; padding-left: 30px !important;">

                  <div class="">
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
                                  <button type="submit" class="btn btn-success">Search</button>    
                              </div>
                          </form>
                      </div>
                      <div class="col-md-6" style="top: 6px !important;">
                        <br>
                        @if(request()->input('month_id'))
                        <button type="button" class="btn btn-danger" data-toggle="popover" title="names" data-content="@foreach($not_yet as $names) {{$loop->iteration}}-{{$names->name}} @endforeach">{{$not_yet->count()}} Employees Doesn't Submit</button>
                        @endif
                      </div>

                          <div class="col-md-12">
                            
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Project</th>
                                  <th scope="col">Month</th>
                                  <th scope="col">module</th>
                                  <th scope="col">Title</th>
                                  <th scope="col">Task Details</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($currnt_month_tasks as $currnt_month_task)
                                <tr>
                                  <th scope="row">{{$loop->iteration}}</th>
                                  <td>{{$currnt_month_task->employee->name}}</td>
                                  <td>{{$currnt_month_task->project->name}}</td>
                                  <td>{{$currnt_month_task->month->name}}</td>
                                  <td>{{$currnt_month_task->module}}</td>
                                  <td>
                                  <a href="{{$currnt_month_task->url}}" target="_blanck">{{$currnt_month_task->deliverables->name}}</a>    
                                  </td>
                                  <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal{{$currnt_month_task->id}}">Show</button>
                                  </td>
                                </tr>


                                <!-- Modal -->
                                    <div class="modal fade" id="myModal{{$currnt_month_task->id}}" role="dialog">
                                      <div class="modal-dialog">
                                      
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"></h4>
                                          </div>
                                          <div class="modal-body">
                                            <p>{{$currnt_month_task->description}}</p>
                                          </div>
                                         
                                        </div>
                                        
                                      </div>
                                    </div>



                              @endforeach
                                  
                              </tbody>
                            </table>
                              
                          </div>
                      </div>
                  </div>


<!-- Trigger the modal with a button -->





            <script>
            $(document).ready(function(){
              $('[data-toggle="popover"]').popover(); 
            });
            </script>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/form/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/form/vendor/select2/select2.min.js"></script>
    <script src="/form/vendor/datepicker/moment.min.js"></script>
    <script src="/form/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/form/js/global.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->