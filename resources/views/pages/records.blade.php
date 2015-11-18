<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link href="./assets/css/bootstrap.css" rel="stylesheet"/>
<link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href="./assets/css/style-responsive.css" rel="stylesheet"/>
<link href="./assets/css/animate.min.css" rel="stylesheet" type="text/css"/>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="./assets/css/StyleSheet.css" type="text/css" rel="stylesheet"> </link>
        <title>Records</title>
        
    </head>

    <body class="master_style">



<form method="post" action="/e-class-record/public/solve" id="form1" class="page_style">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <img id="Image1" src="./assets/img/banner.png" style="width:100%;"> </img>
            
            <div class="styleling" style="height: 450px">
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
            <span id="LoginView1_LoginName1" style="color:Blue;font-family:Verdana;font-size:12pt;font-weight:bold;font-style:normal;">{{ $data['employee_id'] }}</span>
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
                                        <img id="ContentPlaceHolder1_Uc_student_info1_imgbStudent" src="./assets/img/{{ $data['username'] }}.jpg" style="height:70px;width:75px;margin-top: -4px"></td>
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
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblStudentNo" style="font-size:Larger;font-weight:normal;">{{ $data['employee_id'] }}</span></td>
                                                                    <td style="text-align: center">
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblName" style="font-size:Larger;font-weight:normal;">{{ $data['name'] }}</span></td>
                                                                    <td style="width: 75px; text-align: center;">
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblGender" style="font-size:Larger;font-weight:normal;">{{ $data['gender'] }}</span></td>
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
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblEmail">{{ $data['email'] }}</span></td>
                                                                    <td>
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_Label6">Mobile No.</span>
                                                                        <span id="ContentPlaceHolder1_Uc_student_info1_lblMobileNo">{{ $data['contact'] }}</span></td>
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

<br>
    <br>
            <span id="ContentPlaceHolder1_lblType" class="clTitle">Records</span><br>
    <br>


        <span id="ContentPlaceHolder1_Uc_grades1_lblAYTerm" style="font-size:Larger;">2015-2016 - 1st Semester</span><br>
        <br>
        <div>
            
	<table cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_Uc_grades1_gvGrades" style="border-collapse:collapse;">
		<tbody><tr class="GridHeader" style="height:30px;">
			<th scope="col">Student No.</th><th scope="col">Student Name</th><th scope="col">Quiz1</th><th scope="col">Quiz2</th><th scope="col">Prelim Exam</th><th scope="col">Midterm Exam</th><th scope="col">Midterm Grade</th>
		</tr><tr>
		<td style="width:40px;" align="center">
                        <input type="hidden" name="username" value="{{ $data['username'] }}">2010100829
                </td><td style="width:50px;" align="center">Baguio, Ray Angelo</td><td style="width:30px;"><input name="Quiz11" value="{{ $records['quiz11'] }}" style="height:15px;width:40px;"></td><td style="width:30px;"><input name="Quiz12" value="{{ $records['quiz12'] }}" style="height:15px;width:40px;"></td><td style="width:30px;"><input name="PrelimExam" value="{{ $records['prelimexam'] }}" style="height:15px;width:40px;"></td><td style="width:30px;"><input name="MidtermExam" value="{{ $records['midtermexam'] }}" style="height:15px;width:40px;"></td><td style="width:30px;">{{ $records['midtermgrade'] }}</td>
		</tr><tr style="background-color:WhiteSmoke;">
			<td style="width:40px;" align="center">2011100310<td style="width:50px;" align="center">Katipunan, Aldrin</td><td style="width:30px;"><input name="R2Q1" style="height:15px;width:40px;"></td></td><td style="width:30px;">
			<input name="R2Q2" style="height:15px;width:40px;"></td><td style="width:30px;"><input name="R2PRELIM" style="height:15px;width:40px;"></td>
			<td style="width:30px;"><input name="R2MIDTERM" style="height:15px;width:40px;"></td><td style="width:30px;"></td>
		</tr><tr>
			<td style="width:40px;" align="center">2011102230<td style="width:50px;" align="center">Ting, Kim</td><td style="width:30px;">
			<input style="height:15px;width:40px;"></td><td style="width:30px;"><input style="height:15px;width:40px;"></td><td style="width:30px;"><input style="height:15px;width:40px;"></td><td style="width:30px;"><input style="height:15px;width:40px;"></td><td style="width:30px;"></td>
		</tr><tr style="background-color:WhiteSmoke;">
			<td style="width:40px;" align="center">2011101337<td style="width:50px;" align="center">Mendez, Junan Ray</td><td style="width:30px;">
			<input style="height:15px;width:40px;"></td><td style="width:30px;"><input style="height:15px;width:40px;"></td><td style="width:30px;"><input style="height:15px;width:40px;"></td><td style="width:30px;"><input style="height:15px;width:40px;"></td><td style="width:30px;"></td>
		</tr><tr style="background-color:WhiteSmoke;">
			<td style="width:50px;" align="center">TOTAL SCORE<td style="width:100px;" align="center"></td><td style="width:30px;"><input name="TQuiz11" value="{{ $records['tquiz11'] }}" style="height:15px;width:40px;"><td style="width:30px;"><input name="TQuiz12" value="{{ $records['tquiz12'] }}" style="height:15px;width:40px;"><td style="width:30px;">
			<input name="TPrelimExam" value="{{ $records['tprelimexam'] }}" style="height:15px;width:40px;"><td style="width:30px;"><input name="TMidtermExam" value="{{ $records['tmidtermexam'] }}" style="height:15px;width:40px;"><td style="width:30px;" align="center"><input type="submit" value="Solve!" style="height:18px;width:50px;">
					</tr>
	</tbody></table>
</div>
            <br/>

</div>
</div>

            <img id="Image3" src="./assets/img/wave.jpg" style="width:100%;"> </img>
            <img id="Image2" src="./assets/img/cmubanner2.png" style="width:100%;"> </img>
        </form>	

    </body></html>