
<form type = "hidden" method="post" action="{{ url('/subjects') }}" id="form1" />
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

<span style="height: 25px;font-size: 11px;" class = "glyphicon glyphicon-list"> </span>&nbsp; <select style = "line-height: 150px;height: 25px;font-size: 11px;"  size = "1" name="schoolYear">
     <option>Browse SY</option>
    <option>2015-2016</option>
    <option>2014-2015</option>
</select> 
&nbsp;
&nbsp;
<span style="height: 25px;font-size: 11px;" class = "glyphicon glyphicon-list"> </span>&nbsp; <select style = "line-height: 150px;height: 25px;font-size: 11px;" size = "1"onchange = "this.form.submit();" name="semester">
    <option>Browse Quarter</option>
    <option>1st Semester</option>
    <option>2nd Semester</option>
    <option>Summer</option>
</select>
<br>
<br>
 @if($subjectData==null)
<span class="label label-default" style = "font-size:small;">No available class for the selected SY & Quarter </span>
@else
<span class="label label-default" style = "font-size:small;">Available class(s) for {{$subjectData[0]['school_year_sy']}} - {{$subjectData[0]['semester']}}</span>
@endif
<div id="table1" class="table-editable">

    <table class = "table table-responsive">
        <tr class = "TableHeader"> 
            <th>Section</th>

            <th>Subject Code</th>
            <th>Subject Title</th>
            <th>Action</th>
        </tr>

        @foreach($subjectData as $data)
        <tr>

            <td>&nbsp;{{$data['class']}}</td>
            <td>&nbsp;{{ $data['subj_code'] }}</td>
            <td>&nbsp;{{ $data['subject'] }}</td>
            <td <form method="post" action="./records" id="form1">
                    <a href="./class/{{$data['id']}}"> 
                        </input><span class="glyphicon glyphicon-folder-open"></span>  Open </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>