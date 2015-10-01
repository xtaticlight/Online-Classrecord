
@extends('main')
@section('profile')
<title>Home - Login</title>
@section('action')
<form method="post" action="/e-class-record/public/signin" id="form1" class="page_style">
    @section('profile')
    <br/>
    <div class="styleling">
        <div class="form-group col-lg-1 col-md-1 col-xs-1" style="margin-left: -24px; margin-top: 20px">
            Logged&nbsp;as
            <div style="margin-top: 20px">
            <br></br><a id="lbMain" href="http://www.must.edu.ph/">MUST&nbsp;Website</a>&nbsp;&gt;&nbsp;<span>HOME</span>
            </div>
        </div>
        
        <div class="form-group col-lg-1 col-md-1 col-xs-1" style="margin-top: 20px">
            <span id="LoginView1_LoginName1" style="color:Blue;font-family:Verdana;font-size:12pt;font-weight:bold;font-style:normal;">2011100310</span>
            <span id="LoginView1_lblRole" class="color1">[sis_student]</span>
            
            <div class="form-group col-lg-1 col-md-1 col-xs-1">
                <a id="LoginView1_lbChangePW" href="javascript:__doPostBack('ctl00$LoginView1$lbChangePW','')">Change&nbsp;Password</a>&nbsp;|&nbsp;<a id="LoginView1_LoginStatus2" href="javascript:__doPostBack('ctl00$LoginView1$LoginStatus2$ctl00','')">&nbsp;Logout</a>
                
            </div>
            <div class="form-group col-lg-1 col-md-1 col-xs-1" id="messaging">

        

    </div>
            
        </div>
        <div class="form-group col-lg-2 col-md-2 col-xs-2" style="margin-left: 411.5px">
            <span id="lblVersion" style="color:#004000;">Build&nbsp;2012.06.13</span>
            <span id="Label2" class="color1" style="font-family:Bodoni MT;font-size:38pt;">ESOnline</span><br>
            <span id="Label3">Online&nbsp;Class&nbsp;Record&nbsp;Encoding</span>
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
                                        <img id="ContentPlaceHolder1_Uc_student_info1_imgbStudent" src="" style="height:75px;width:75px;"></td>
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
                                                                    <td style="width: 120px;" class="TableHeader">
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_Label3">Course/Yr</span></td>
                                                                    <td style="width: 75px;" class="TableHeader">
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_Label4">Gender</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 100px; text-align: center;">
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblStudentNo" style="font-size:Larger;font-weight:normal;">400382</span></td>
                                                                    <td style="text-align: center">
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblName" style="font-size:Larger;font-weight:normal;">Bernard Talungko</span></td>
                                                                    <td style="width: 120px; text-align: center;">
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblCourseYr" style="font-size:Larger;font-weight:normal;"></span></td>
                                                                    <td style="width: 75px; text-align: center;">
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblGender" style="font-size:Larger;font-weight:normal;"></span></td>
                                                                </tr>
                                                            </tbody></table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        &nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color: gainsboro" valign="bottom">
                                                        <table style="font-size: smaller; width: 100%; font-style: italic">
                                                            <tbody><tr>
                                                                    <td>
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_Label5">Email</span>
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblEmail"></span></td>
                                                                    <td>
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_Label6">Mobile No.</span>
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblMobileNo"></span></td>
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
            <span id="ContentPlaceHolder1_lblType" class="clTitle">Grades</span><br>
    <br>
<table id="ContentPlaceHolder1_Uc_grades1_Uc_regayterm1_tbl">
	<tbody><tr>
		<td>
            <span id="ContentPlaceHolder1_Uc_grades1_Uc_regayterm1_Label1">School Year</span></td>
		<td>
            <span id="ContentPlaceHolder1_Uc_grades1_Uc_regayterm1_Label2">Semester</span></td>
		<td>
        </td>
	</tr>
	<tr>
		<td>
            <select name="ctl00$ContentPlaceHolder1$Uc_grades1$Uc_regayterm1$ddlSchoolYear" id="ContentPlaceHolder1_Uc_grades1_Uc_regayterm1_ddlSchoolYear">
			<option value="2015-2016">2015-2016</option>
			<option value="2014-2015">2014-2015</option>
			<option value="2013-2014">2013-2014</option>
			<option value="2012-2013">2012-2013</option>
			<option value="2011-2012">2011-2012</option>

		</select></td>
		<td>
            <select name="ctl00$ContentPlaceHolder1$Uc_grades1$Uc_regayterm1$ddlSemester" id="ContentPlaceHolder1_Uc_grades1_Uc_regayterm1_ddlSemester">
			<option value="1st Semester">1st Semester</option>
			<option value="2nd Semester">2nd Semester</option>
			<option value="Summer">Summer</option>

		</select></td>
		<td>
            <input type="submit" name="ctl00$ContentPlaceHolder1$Uc_grades1$Uc_regayterm1$btnOk" value="Ok" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$Uc_grades1$Uc_regayterm1$btnOk&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_Uc_grades1_Uc_regayterm1_btnOk" class="clButton" style="height:20px;width:100px;"></td>
	</tr>
</tbody></table>

</center>
<input type="hidden" name="ctl00$ContentPlaceHolder1$hfStudentNo" id="ContentPlaceHolder1_hfStudentNo">

&nbsp;

</td></tr>
</tbody></table>


@stop