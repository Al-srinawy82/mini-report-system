<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Safe Crowd">
    <meta name="author" content="Safe Crowd">
    <meta name="keywords" content="Safe Crowd">

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


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div class="page-wrapper bg-gra-0010 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div  class="card-heading" style="display:flex;">
                    <div class="">
                        <img  src="/images/logo.png" alt=""  width="300" >
                    </div>

                    <div class="title " style="margin:auto">
                        Submit Your Task
                    </div>
                </div>
                <div class="card-body">
                <form  method="POST" action="{{route('store-task')}}">
               
               @csrf
               @method('post')


               

               <div class="form-row">
                            <div class="name">Choose Your Name</div>
                            <div class="value">
                                <div class="">
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
                                <div class="">
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
                                <div class="">
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


                        <div class="container">
                <div class="row clearfix">
                <div class="form-row">
                                        <div class="name"></div>
                </div>
                    <div class="col-md-5 table-responsive">
                        <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                            <thead>
                                <tr >
                                    <th class="text-center">
                                    Deliverables
                                    </th>
                                    
                                    <th class="text-center">
                                        Document Url
                                    </th>
                                    <th class="text-center" style="">
                                    Remove
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id='addr0' data-id="0" class="hidden">




                                    <td data-name="deliverable_id[]">
                                    <select id="url" >
                                            <option value="" disabled="disabled" selected="selected">Choose Deliverable</option>
                                            
                                        @foreach($deliverables as $deliverable)
                                            <option value="{{$deliverable->id}}">{{$deliverable->name}}</option>
                                        @endforeach
                                    </select>
                                    </td>



                                                        
                                    <td data-name="url[]">
                                    <input id="url" class="form-control" type="text" >
                                    </td>



                                    <td data-name="del">
                                        <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true"></span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @if($errors->first('deliverable_id'))
                    <div style="color:red;">{{$errors->first('deliverable_id')}}</div>
                @endif
                        @if($errors->first('url'))
                    <div style="color:red;">{{$errors->first('url')}}</div>
                @endif
                    </div>
                </div>
                <a style="margin-left:-16px" id="add_row" class="btn btn-primary float-right">Add Raw</a>
            </div>




                        

     

                        <div class="form-row">
                            <div class="name">Module</div>
                            <div class="value">
                                <div class="">
                                    <input value="{{old('module')}}" class="input--style-5" type="text" name="module">
                                </div>
                                @if($errors->first('module'))
                                        <div style="color:red;">{{$errors->first('module')}}</div>
                                @endif
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Task Details</div>
                            <div class="value">
                                <div class="">
                                     <textarea placeholder="Task Details output Details Figures/Images/Link" name="description" class="input--style-5" rows="3" cols="45">{{old('description')}}</textarea>
                                </div>
                                @if($errors->first('description'))
                                        <div style="color:red;">{{$errors->first('description')}}</div>
                                @endif
                            </div>
                        </div>
                     

           
                 
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
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
    

<script>

$('#apply-form input').blur(function()
{
    if( $(this).val().length === 0 ) {
        $(this).parents('p').addClass('warning');
    }
});


$(document).ready(function() {
    $("#add_row").on("click", function() {
        // Dynamic Rows Code
        
        // Get max row id and set new id
        var newid = 0;
        $.each($("#tab_logic tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;
        
        var tr = $("<tr></tr>", {
            id: "addr"+newid,
            "data-id": newid
        });
        
        // loop through each td and create new elements with name of newid
        $.each($("#tab_logic tbody tr:nth(0) td"), function() {
            var td;
            var cur_td = $(this);
            
            var children = cur_td.children();
            
            // add new td and element if it has a nane
            if ($(this).data("name") !== undefined) {
                td = $("<td></td>", {
                    "data-name": $(cur_td).data("name")
                });
                
                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                td = $("<td></td>", {
                    'text': $('#tab_logic tr').length
                }).appendTo($(tr));
            }
        });
        
        // add delete button and td
        /*
        $("<td></td>").append(
            $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
                .click(function() {
                    $(this).closest("tr").remove();
                })
        ).appendTo($(tr));
        */
        
        // add the new row
        $(tr).appendTo($('#tab_logic'));
        
        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
        });
});




    // Sortable Code
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
    
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        
        return $helper;
    };
  
    $(".table-sortable tbody").sortable({
        helper: fixHelperModified      
    }).disableSelection();

    $(".table-sortable thead").disableSelection();



    $("#add_row").trigger("click");
});






</script> 

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->