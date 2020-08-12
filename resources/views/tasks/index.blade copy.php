<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Submit Your Task</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <form  method="POST" action="{{route('store-task')}}">
               
                @csrf
                @method('post')


                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Your Name</label>
                        <select name="employee_id" class="form-control" id="exampleFormControlSelect1">
                        <option value="">Select Your Name</option>
                            @foreach($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->name}}</option>ç
                            @endforeach
                        </select>
                    </div>


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
                        <label for="exampleFormControlInput1">Task Title</label>
                        <input name="title" type="text" class="form-control"  placeholder="Task Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Task Documents Url</label>
                        <input name="url" type="text" class="form-control"  placeholder="Task Documents Url">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Task Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>    
                    </div>
                </form>
            
            
            
            </div>
        </div>
    </div>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
