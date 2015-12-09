<span class="clTitle">Subjects</span><br>
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<span > {{ Session::get('schoolYear') }} {{ Session::get('semester') }}</span></h6>
 <br />
<br>
<div >
    <table cellspacing="2" rules="all" border="1"  style="border-collapse:collapse;">
        <tbody><tr class="GridHeader" style="height:30px;">
                <th>&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cog"</span></th><th scope="col">Subject Code</th><th scope="col">Subject Title</th><th scope="col">Section</th>
            </tr>
            @foreach($subjectData as $data)
            <tr>
                <td style="width:45px;" align="center"><form method="post" action="./records" id="form1">
                    <a href="./class/{{$data['id']}}">
                    </input><span class="glyphicon glyphicon-folder-open"></span></a>
                </td>
                <td style="width:120px;">&nbsp;{{$data['sub_code']}}</td><td style="width:200px;">&nbsp;{{ $data['name'] }}</td><td style="width:200px;">&nbsp;{{ $data['sec_code'] }}</td>
            </tr>
            @endforeach

        </tbody>

    </table>
</div>	