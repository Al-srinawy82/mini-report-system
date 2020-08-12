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
    <title>Submit Your Task</title>

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
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Submit Your Task</h2>
                </div>
                <div class="card-body">
                <form  method="POST" action="{{route('store-task')}}">
               
               @csrf
               @method('post')


               

               <div class="form-row">
                            <div class="name">Choose Your Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="employee_id">
                                            <option disabled="disabled" selected="selected">Choose Your Name</option>
                                            
                                            @foreach($employees as $employee)
                                                <option value="{{$employee->id}}">{{$employee->name}}</option>ç
                                            @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                    @if($errors->first('employee_id'))
                                        <div style="color:red;">{{$errors->first('employee_id')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Choose Month</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="month_id">
                                            <option disabled="disabled" selected="selected">Choose Month</option>
                                            
                                            @foreach($months as $month)
                                                <option value="{{$month->id}}">{{$month->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                    @if($errors->first('month_id'))
                                        <div style="color:red;">{{$errors->first('month_id')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="name">Choose Project</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="project_id">
                                            <option disabled="disabled" selected="selected">Choose Project</option>
                                            
                                            @foreach($projects as $project)
                                                <option value="{{$project->id}}">{{$project->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                    @if($errors->first('project_id'))
                                        <div style="color:red;">{{$errors->first('project_id')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Choose Deliverables</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="deliverable_id">
                                                <option  disabled="disabled" selected="selected">Choose Deliverable</option>
                                                
                                            @foreach($deliverables as $deliverable)
                                                <option value="{{$deliverable->id}}">{{$deliverable->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                    @if($errors->first('deliverable_id'))
                                        <div style="color:red;">{{$errors->first('deliverable_id')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Task Documents Url</div>
                            <div class="value">
                                <div class="input-group">
                                    <input value="{{old('url')}}" class="input--style-5" type="text" name="url">
                                </div>
                                @if($errors->first('url'))
                                        <div style="color:red;">{{$errors->first('url')}}</div>
                                @endif
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Task Details</div>
                            <div class="value">
                                <div class="input-group">
                                     <textarea placeholder="Task Details output Details Figures/Images/Link" name="description" class="input--style-5" rows="3" cols="44">{{old('description')}}</textarea>
                                </div>
                                @if($errors->first('description'))
                                        <div style="color:red;">{{$errors->first('description')}}</div>
                                @endif
                            </div>
                        </div>

                    
                 
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
                        </div>
                    </form>
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
    

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->