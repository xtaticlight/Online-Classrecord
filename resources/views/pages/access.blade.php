@extends('main')
@section('profile')
<title>Records</title>
@section('action')

<form method="post" action="/e-class-record/public/subjects" id="form1" class="page_style">
    @section('profile')
    <br/>
    <div class="styleling">
        <div class="form-group col-lg-4 col-md-4 col-xs-4" style="margin-left: -15px">
            <p class="text-nowrap">Logged as</p>
            <div style="margin-top: 20px" class="text-nowrap">
                <br></br><a id="lbMain" href="http://www.must.edu.ph/">MUST Website</a> &gt; <a id="lbMain" style="color: Green" href="./home">HOME</a> &gt; <span>Class Record</span>
            </div>
        </div>

        <div class="form-group col-lg-4 col-md-4 col-xs-4 col-lg-pull-3 col-md-pull-3 col-xs-pull-3">
            <div class="container">
                <div class="form-group col-lg-12 col-md-12 col-xs-12" style="margin-left: -25px">
                    <span id="LoginView1_LoginName1" style="color:Blue;font-family:Verdana;font-size:12pt;font-weight:bold;font-style:normal;">{{ $userData['id'] }}</span>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-xs-12" style="margin-top: -15px;margin-bottom: -15px;margin-left: -25px">
                    <span id="LoginView1_lblRole" class="color1">[employee]</span>
                </div>
            </div>

            <div class="form-group col-lg-12 col-md-12 col-xs-12" style="margin-left: -10px">
                <a class="text-nowrap" id="LoginView1_lbChangePW" href="javascript:__doPostBack('ctl00$LoginView1$lbChangePW','')">Change Password</a> | <a id="LoginView1_LoginStatus2" href="http://localhost/e-class-record/public/login"> Logout</a>

            </div>


        </div>
        <div class="form-group col-lg-4 col-md-4 col-xs-4" style="margin-top: -15px; margin-left: 15px">
            <span id="lblVersion" style="color:#004000;" class="text-nowrap">Build 2012.06.13</span>
            <span id="Label2" class="color1" style="font-family:Bodoni MT;font-size:38pt;">ESOnline</span><br>
            <span id="Label3" class="text-nowrap">Online Class Record Encoding</span>
        </div>
    </div>
    <table width="100%">
        <tbody><tr>
                <td>
                    <div id="ContentPlaceHolder1_Uc_student_info1_divParent" class="parent_panel" style="display:none;text-align:center;">
                        <table width="100%">
                            <tbody><tr>
                                    <td style="text-align: left">
                                        <a id="ContentPlaceHolder1_Uc_student_info1_lbSelectStudent" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$Uc_student_info1$lbSelectStudent','')" style="color:#c0c0c0; text-decoration:none">
                                            &lt;&lt; Select another student</a></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">
                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblParent" style="font-size:Large;"></span></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">
                                        Viewing</td>
                                </tr>
                            </tbody></table>

                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tbody><tr>
                                <td valign="middle" style="text-align: center; vertical-align:middle; padding:3px">
                                    <img id="ContentPlaceHolder1_Uc_student_info1_imgbStudent" src="./assets/img/{{ $userData['username'] }}.jpg" style="height:70px;width:75px;margin-top: -4px"></td>
                                <td valign="top" style="width: 100%">
                                    <table cellpadding="0" cellspacing="0" width="100%">
                                        <tbody><tr>
                                                <td>
                                                    <table width="100%">
                                                        <tbody><tr>
                                                                <td style="width: 100px;" class="TableHeader">
                                                                    <span id="ContentPlaceHolder1_Uc_student_info1_Label1">Employee No.</span></td>
                                                                <td class="TableHeader">
                                                                    <span id="ContentPlaceHolder1_Uc_student_info1_Label2">Name</span></td>
                                                                <td style="width: 75px;" class="TableHeader">
                                                                    <span id="ContentPlaceHolder1_Uc_student_info1_Label4">Gender</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 100px; height: 30px; text-align: center;">
                                                                    <span id="ContentPlaceHolder1_Uc_student_info1_lblStudentNo" style="font-size:Larger;font-weight:normal;">{{ $userData['id'] }}</span></td>
                                                                <td style="text-align: center">
                                                                    <span id="ContentPlaceHolder1_Uc_student_info1_lblName" style="font-size:Larger;font-weight:normal;">{{ $userData['name'] }}</span></td>
                                                                <td style="width: 75px; text-align: center;">
                                                                    <span id="ContentPlaceHolder1_Uc_student_info1_lblGender" style="font-size:Larger;font-weight:normal;">{{ $userData['gender'] }}</span></td>
                                                            </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color: gainsboro" valign="bottom">
                                                    <table style="font-size: smaller; width: 100%; font-style: italic">
                                                        <tbody><tr>
                                                                <td>
                                                                    <span id="ContentPlaceHolder1_Uc_student_info1_Label5">Email</span>
                                                                    <span id="ContentPlaceHolder1_Uc_student_info1_lblEmail">{{ $userData['email'] }}</span></td>
                                                                <td>
                                                                    <span id="ContentPlaceHolder1_Uc_student_info1_Label6">Mobile No.</span>
                                                                    <span id="ContentPlaceHolder1_Uc_student_info1_lblMobileNo">{{ $userData['contactNumber'] }}</span></td>
                                                            </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                </td>
                            </tr>
                        </tbody></table>

                </td>
            </tr>
        </tbody></table>







    <div class="TableBg">

    </div>
    <input type="hidden" name="ctl00$ContentPlaceHolder1$Uc_student_info1$hfProfileURL" id="ContentPlaceHolder1_Uc_student_info1_hfProfileURL" value="~/_student/access.aspx?type=profile"><input type="hidden" name="ctl00$ContentPlaceHolder1$Uc_student_info1$hfStudentNo" id="ContentPlaceHolder1_Uc_student_info1_hfStudentNo">

    <br>
    <br>
    <span id="ContentPlaceHolder1_lblType" class="clTitle">Records</span><br>
    <br>
    <table id="ContentPlaceHolder1_Uc_grades1_Uc_regayterm1_tbl">
        <tbody><tr>
                <td>
                    <span id="ContentPlaceHolder1_Uc_grades1_Uc_regayterm1_Label1">School Year</span></td>
                
                <td>
                   &nbsp; <span id="ContentPlaceHolder1_Uc_grades1_Uc_regayterm1_Label2">Semester</span></td>
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
                         <option>FIRST</option>
                         <option>SECOND</option>
                          <option>SUMMER</option>
                    </select></td>
               <td>
                  &nbsp;  <input type="submit" value="Ok" class="clButton" style="height:20px;width:100px;"></td>
            </tr>
        </tbody></table>

</center>
<input type="hidden" name="ctl00$ContentPlaceHolder1$hfStudentNo" id="ContentPlaceHolder1_hfStudentNo">

</td></tr>
</tbody></table>


@stop