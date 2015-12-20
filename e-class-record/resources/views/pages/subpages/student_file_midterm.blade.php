<br>
<span class="clTitle">Class Records</span><br>
<span style="font-size:Larger;">2015-2016 - 1st Semester </span>&gt;<span style="font-size:Larger;"> {{$term}}</span>  
<br>
<br>
<div id="table" class="table-responsive">
    <form method="post" action="{{ url('/update') }}" id="updateform" >

        <div  style="margin:0;" class="form-group">
            <table class = "table table-bordered form-group col-lg-4 col-md-4 col-xs-4" style="width: 262px; margin-left: 15px;">

                <tr class = "TableHeader" style="text-transform: capitalize"> 
                    <th style="height: 47px">ID No.</th>
                    <th style="height: 47px">Name</th>
                </tr>
                <?php $activitiesNo = 1; ?>
                @foreach($activitiesData as $data)

                <tr>

                    <td class="TableHeader" style="background-color: #449d44;" contenteditable="false">{{$data[0]['students_id']}}</td>
                    <td style="background-color: #FCFB98; white-space: nowrap;" contenteditable="false">{{$data[0]['sname']}}</td>


                </tr>
                @endforeach
                <tr class = "TableHeader" style="text-transform: capitalize"> 
                    <th style="height: 32px"></th>
                    <th></th>
                </tr>
            </table>
            <div class = "table table-bordered form-group col-lg-4 col-md-4 col-xs-4" style="overflow-x: auto; width: 542px; padding: 0px; border: 0px">
                <table class = "table table-bordered" style="margin-bottom: -5px;border-bottom-width: 0px;margin-bottom: 0px;">

                    <tr class = "TableHeader" style="text-transform: capitalize"> 

                        <?php
                        $count = 0;
                        $end = 'false';
                        ?>
                        @foreach($activitiesData as $data)
                        <?php if ($end == 'false'):
                            ?>
                            @foreach($data as $data1)
                            <th style="height: 47px">{{$data[$count++]['act_name']}}</th>
                            @endforeach
                            <?php
                        endif;
                        $end = 'true';
                        ?>
                        @endforeach

                    </tr>

                    @foreach($activitiesData as $data)
                    <tr>
                        <?php
                        $count = 1;
                        ?>
                        @foreach($data as $data1)

                        <td><input data-toggle="tooltip" data-placement="top" title="{{$data1['act_name']}}" tabindex="{{$count++}}" style="height: 15px; width: 54px; border: 0" class="form-login" name="{{ $data1['id'] }}" value="{{ $data1['score'] }}"></td>
                    <input type="hidden" name="activities{{$activitiesNo}}" value="{{$data1['id']}}" />
                    <?php
                    $activitiesNo++;
                    ?>
                    @endforeach
                    </tr>
                    @endforeach

                    <tr class = "TableHeader" style="text-transform: capitalize"> 
                        <?php
                        $count = 0;
                        $end = 'false';
                        ?>
                        @foreach($activitiesData as $data)
                        <?php if ($end == 'false'):
                            ?>
                            @foreach($data as $data1)
                            <th data-toggle="tooltip" data-placement="top" title="{{$data1['act_name']}} Total Points">{{$data[$count++]['total']}}</th>
                            @endforeach
                            <?php
                        endif;
                        $end = 'true';
                        ?>
                        @endforeach
                    </tr>

                </table>
            </div>
            <table class = "table table-bordered form-group col-lg-4 col-md-4 col-xs-4" style="width: 282px">
                <tr class = "TableHeader" style="text-transform: capitalize;">
                    <th style="background-color: gainsboro;"><a data-toggle = "modal" href="#myModal"><span class="glyphicon glyphicon-plus"></span></a></th>
                    <?php
                    $count = 0;
                    $end = 'false';
                    ?>
                    @foreach($activitiesData as $data)
                    <?php if ($end == 'false'):
                        ?>
                    <th style="height: 47px">{{$data[0]['term']}} Exam</th>
                        <th>{{$data[0]['term']}} Grade</th>
                        <?php
                    endif;
                    $end = 'true';
                    ?>
                    @endforeach
                    <th>Remarks</th>

                </tr>
                @foreach($activitiesData as $data)
                <tr>
                    <td></td>

                    <td style="background-color: #FCFB98;"contenteditable="false" >{{$data[0]['exam_score']}}</td>
                    <td  style="background-color: #FCFB98;"contenteditable="false">{{$data[0]['term_grade']}}</td>
                    <td  style="background-color: #a9d86e;"contenteditable="true">{{$data[0]['remarks']}}</td>

                </tr>
                @endforeach
                <tr class = "TableHeader" style="text-transform: capitalize"> 
                    <th style="background-color: gainsboro;"></th>
                    <?php
                    $count = 0;
                    $end = 'false';
                    ?>
                    @foreach($activitiesData as $data)
                    <?php if ($end == 'false'):
                        ?>
                        <th>{{$data[0]['exam_total']}}</th>
                        <th></th>
                        <?php
                    endif;
                    $end = 'true';
                    ?>
                    @endforeach
                    <th></th>
                </tr>
            </table>

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="activitiesNo" value="{{$activitiesNo}}" />
            <input type="hidden" name="term" value="{{$term}}" />
            <input type="hidden" name="subject_id" value="{{$subject_id}}" />


        </div>
        <div class = pull-right style="margin-bottom: 15px">
            <button id="export-btn" style="height: 30px;"class="btn btn-info"><span class="glyphicon glyphicon-download-alt"></span> Import</button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button id="export-btn" style="height: 30px;"class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" data-toggle = "modal" data-target = "#myModal1" style  = "height: 30px;" class="btn btn-warning"><span class = "glyphicon glyphicon-open"></span> Post</button>
        </div>
    </form>
    <br>
    <br>
</div>
<!-- Modal -->
<form method="post" action="{{ url('/addactivity') }}" id="updateform">
<div class="modal fade" id="myModal" role="dialog">
    
    <div class="modal-dialog">

        <!-- Modal content-->
        
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-plus "></span> Add Activity</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                
                    <div class="form-group col-lg-6">
                        <h5 for="activity"><span class="glyphicon glyphicon-file"></span> Activity Name </h5>

                        <select name="selected_act" style = "line-height: 200px;height: 33px;font-size: 13px;">
                            <option>Dropdown to select activity</option>
                            <option>Quiz</option>
                            <option>Oral</option>
                            <option>Assignment</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <h5 for="activity"><span class="glyphicon glyphicon-tasks"></span> Total Score </h5>
                        <input type="text" class="form-control" name="total" placeholder="Total Score">
                    </div>
                
            </div>
            <div class = "modal-footer">
                <button Data-dismiss ="modal" class="btn btn-success btn-danger"><span class="glyphicon glyphicon-remove"></span>  Cancel</button>
                <button type="submit" class="btn btn-success btn-success"><span class="glyphicon glyphicon-plus"></span>  Add</button>
            </div>
        </div>

    </div>
</div>
</form>
<!-- Modal -->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:20px 15px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Are you sure with this action?</h4>
            </div>
            <div class = "modal-body">
                <p style = "font-size:15px;"> <span class = "glyphicon glyphicon-flash"></span> This will update the data on the prism and it will not be easy.</p>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-success btn-danger"><span class = "glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" class="btn btn-success btn-success"><span class = "glyphicon glyphicon-share"></span> Proceed</button>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function () {
        
    });
    
</script>