@extends('main')
@section('content')
    <title>Home - Login</title>
    <body class="master_style">

<form method="post" action="./subjects_files/index.html" onsubmit="javascript:return WebForm_OnSubmit();" id="form1" class="page_style">

<img id="Image1" src="./assets/img/banner.png" style="width:100%;">

<table id="tblBg" width="800">
<tbody><tr><td style="text-align: right; width: 800px;" valign="top">
    &nbsp;<span id="lblVersion" style="color:#004000;">Build 2012.06.13</span></td></tr>
    <tr>
        <td valign="top" style="width: 800px">
    <table style="width: 100%">
        <tbody><tr>
            <td>
    
                <table cellpadding="0" cellspacing="0" style="font-size: x-small">
                    <tbody><tr>
                        <td valign="top">
                            
                                            <table border="0" cellpadding="1" cellspacing="0" style="border-collapse: collapse">
                                                <tbody><tr>
                                                    <td valign="bottom">
                                                        <table border="0" cellpadding="0">
                                                            <tbody><tr>
                                                                <td align="right">
                                                                </td>
                                                                <td colspan="3" valign="bottom">
                                                                    <span id="LoginView1_Label1" class="color1">You are not logged In</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right">
                                                                </td>
                                                                <td valign="bottom">
                                                                    <label for="LoginView1_tbUserName" id="LoginView1_UserNameLabel">User Name:</label>
                                                                    <span id="LoginView1_UserNameRequired" title="User Name is required." style="visibility:hidden;">*</span></td>
                                                                <td valign="bottom">
                                                                    <label for="LoginView1_tbPassword" id="LoginView1_PasswordLabel">Password:</label>
                                                                    <span id="LoginView1_PasswordRequired" title="Password is required." style="visibility:hidden;">*</span></td>
                                                                <td valign="bottom">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right">
                                                                </td>
                                                                <td valign="bottom">
                                                                    <input name="ctl00$LoginView1$tbUserName" type="text" id="LoginView1_tbUserName" class="clTextBox" style="height:15px;width:100px;">&nbsp;
                                                                </td>
                                                                <td valign="bottom">
                                                                    <input name="ctl00$LoginView1$tbPassword" type="password" id="LoginView1_tbPassword" class="clTextBox" style="height:15px;width:100px;"></td>
                                                                <td valign="bottom">
                                                                    &nbsp;<input type="submit" name="ctl00$LoginView1$btnLogin" value="Log In" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$LoginView1$btnLogin&quot;, &quot;&quot;, true, &quot;ctl00$ctl00$Login1&quot;, &quot;&quot;, false, false))" id="LoginView1_btnLogin" class="clButton" style="height:20px;width:50px;"></td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="bottom">
                                                        <span id="LoginView1_lblMsg" style="color:Red;"></span></td>
                                                </tr>
                                            </tbody></table>
                                
                        </td>
                    </tr>
                </tbody></table>
                &nbsp;
            
            </td>
            <td style="text-align: right" valign="top">
                <span id="Label2" class="color1" style="font-family:Bodoni MT;font-size:38pt;">ESOnline</span><br>
                <span id="Label3">Online Class Record Encoding</span></td>
        </tr>
    </tbody></table>
        </td>
    </tr>
    <tr><td style="height:50px; width: 800px;" valign="bottom">
        <table cellpadding="0" cellspacing="0" style="width: 100%">
            <tbody><tr>
                <td valign="middle">
                    <a id="lbMain" href="javascript:__doPostBack('ctl00$lbMain','')">MUST Website</a>
                    &gt;
        <span id="SiteMapPath1"><a href="http://utilities.must.edu.ph/MUST_SIS/home.aspx#SiteMapPath1_SkipLink"><img alt="Skip Navigation Links" height="0" width="0" src="./subjects_files/WebResource(2).axd" style="border-width:0px;"></a><span>HOME</span><a id="SiteMapPath1_SkipLink"></a></span>
                </td>
                <td style="text-align: right" valign="bottom">
                </td>
            </tr>
        </tbody></table>
        &nbsp;
        
    </td></tr>
<tr><td style="height:400px; width: 800px;" valign="top">
    

        

   
    <input type="hidden" name="ctl00$ContentPlaceHolder1$hfStudentNo" id="ContentPlaceHolder1_hfStudentNo">

        &nbsp;

</td></tr>
</tbody></table>
        <img id="Image3" src="./assets/img/wave.jpg" style="width:100%;">
 <img id="Image2" src="./assets/img/cmubanner2.png" style="width:100%;">
        <div id="pnlConsole" style="width: 830px; left: 268px; top: 293px; position: fixed;">
	
            <center>
                 <div id="UpdateProgress1" style="display:none;" role="status" aria-hidden="true">
		
                        <img id="imgLoading" src="./assets/img/loading.gif">
                    
	</div>
                &nbsp;</center>
        
</div>
        
        &nbsp;

<div style="background-color:Yellow; color:Red">
<center><span id="uc_msg1_lblMsg"></span></center></div>


</form>



</body>
@stop