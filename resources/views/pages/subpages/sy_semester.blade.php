<form method="post" action="/e-class-record/public/subjects" id="form1">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <input type="hidden" name="username" value="{{ $userData['username'] }}">
    <br>
    <span class="clTitle">Records</span><br>
    <br>
    <table>
        <tbody><tr>
                <td>
                    <span>School Year</span></td>

                <td>
                    &nbsp; <span>Semester</span></td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <select name="schoolYear" id="form1">
                        <option>2015-2016</option>
                        <option>2014-2015</option>
                    </select></td>
                <td>
                    &nbsp;
                    <input type="hidden" name="id" value="{{ $userData['id'] }}">
                    <input type="hidden" name="username" value="{{ $userData['username'] }}">
                    <select name="semester" id="form1">
                        <option>1st Semester</option>
                        <option>2nd Semester</option>
                        <option>Summer</option>
                    </select></td>
                <td>
                    &nbsp;  <input type="submit" value="Ok" class="clButton" style="height:20px;width:100px;"></td>
            </tr>
        </tbody></table>

</center>
</td></tr>
</tbody>
</table>