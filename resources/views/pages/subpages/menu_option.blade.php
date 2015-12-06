<form method="post" action="/e-class-record/public/access" id="form1">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<input type="hidden" name="username" value="{{ $userData['username'] }}">
<input type="hidden" name="id" value="{{ $userData['id'] }}">
    <table id="ContentPlaceHolder1_tblMenu" style="margin: -10px; margin-left: 10px">
        <tbody><tr>
                <td style="text-align: center; width: 150px">
                    <button type="submit">
                        <img id="ContentPlaceHolder1_Image4" src="./assets/img/classrecord.png" style="margin-bottom: 7px">
                    </button>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; width: 150px;" valign="top">
                    <span id="ContentPlaceHolder1_Label4" style="color:Blue;font-size:14pt;font-weight:normal;">Class Record</span></td>
            </tr>
        </tbody>
    </table>
</form>