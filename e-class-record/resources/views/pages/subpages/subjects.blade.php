<span class="clTitle">Subjects</span><br>
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<span > {{ Session::get('schoolYear') }} {{ Session::get('semester') }}</span></h6>
<br />
<br>
<div id="table1" class="table-editable">

    <table class = "table table-responsive">
        <tr class = "TableHeader"> 
            <th>Section</th>
           
            <th>Subject Code</th>
            <th>Subject Title</th>
             <th><span class = "glyphicon glyphicon-cog"</span></th>
        </tr>

        @foreach($subjectData as $data)
        <tr>
           
            <td>&nbsp;{{$data['class']}}</td>
            <td>&nbsp;{{ $data['subj_code'] }}</td>
            <td>&nbsp;{{ $data['subject'] }}</td>
            <td <form method="post" action="./records" id="form1">
                    <a href="./class/{{$data['id']}}"> 
                        </input><span class="glyphicon glyphicon-folder-open"></span></a>
            </td>
       </tr>
        @endforeach
    </table>
    </div>

<p>Total Subject(s) : </p>
<p>Total Load(s) : </p>