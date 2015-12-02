<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link href="./assets/css/bootstrap.css" rel="stylesheet"/>
<link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href="./assets/css/style-responsive.css" rel="stylesheet"/>
<link href="./assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<script src="./assets/js/jquery-1.11.2.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="./assets/css/StyleSheet.css" type="text/css" rel="stylesheet"> </link>
        <title>Records</title>

    </head>
    <style>
        .table-editable {
            position: relative;
            .glyphicon {
                font-size: 40px;
            }
        }
        .table-remove {
            color: #700;
            cursor: pointer;

            &:hover {
                color: #f00;
            }
        }
        .table-add {
            color: #070;
            cursor: pointer;
            position: absolute;
            top: 8px;
            right: 0;

            &:hover {
                color: #0b0;
            }
        }
    </style>
    <body class="master_style">



        <form method="post"  id="form1" class="page_style">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <img id="Image1" src="./assets/img/banner.png" style="width:100%;"> </img>

            <div class="styleling">
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
                            <a class="text-nowrap" id="LoginView1_lbChangePW" href="javascript:__doPostBack('ctl00$LoginView1$lbChangePW','')">Change Setup</a> | <a id="LoginView1_LoginStatus2" href="http://localhost/e-class-record/public/login"> Logout</a>

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


                                <span id="ContentPlaceHolder1_Uc_grades1_lblAYTerm" style="font-size:Larger;">2015-2016 - 1st Semester</span> 
                                <div class="pull-right">
                                    <select>
                                        <option value="mid">Mid term</option>
                                        <option value="final">Final Term</option>
                                    </select>
                                </div>
                                <br>
                                    <div id="table" class="table-editable">
                                        <span class="table-add glyphicon glyphicon-plus"></span>
                                        <table class = "table table-hover">
                                            <tr>
                                                <th>Student No.</th>
                                                <th>Student Name</th>
                                                <th>Quiz 1 <span class="table-remove glyphicon glyphicon-minus-sign"></span> </th>
                                                <th>Quiz 2 <span class="table-remove glyphicon glyphicon-minus-sign"></th>
                                                <th>Quiz 3 <span class="table-remove glyphicon glyphicon-minus-sign"> </th>
                                            </tr>
                                            <tr>
                                                <td contenteditable="false">2011102230</td>
                                                <td contenteditable="false">Kim B. Ting</td>
                                                <td contenteditable="true"> 70</td>
                                                <td contenteditable="true"> 80</td>
                                                <td contenteditable="true"> 90</td>

                                            </tr>
                                            <tr>
                                                <td contenteditable="false">2011101111</td>
                                                <td contenteditable="false">Aldrin  A. Katipunan</td>
                                                <td contenteditable="true"> 56</td>
                                                <td contenteditable="true"> 100</td>
                                                <td contenteditable="true"> 90</td>

                                            </tr>
                                            <tr>
                                                <td contenteditable="false">2011100097</td>
                                                <td contenteditable="false">Annabella D. Tan</td>
                                                <td contenteditable="true"> 90</td>
                                                <td contenteditable="true"> 90</td>
                                                <td contenteditable="true"> 90</td>

                                            </tr>
                                            <table
                                                </div>
                                                <button id="export-btn" class="btn btn-primary">Export Data</button>
                                                <p id="export"></p>

                                                <br/>

                                                </div>
                                                </div>

                                                <img id="Image3" src="./assets/img/wave.jpg" style="width:100%;"> </img>
                                                <img id="Image2" src="./assets/img/cmubanner2.png" style="width:100%;"> </img>
                                                </form>	

                                                </body>
                                                <script>
$(document).ready(function () {
    var $TABLE = $('#table');
    var $BTN = $('#export-btn');
    var $EXPORT = $('#export');

    $('.table-add').click(function () {
        $('.table-editable').find('tr').each(function () {
            $(this).find('th').eq(-1).after('<th><select><option id = "select"><option>Quiz</option></select> <span class="table-remove glyphicon glyphicon-minus-sign"></span> </th>');
            $(this).find('td').eq(-1).after('<td contenteditable="true"></td>');
        });
    });
    $('.table-remove').click(function () {
        var colnum =1; 
        alert(colnum);
        $(this).closest("table").find("tr").find("th:eq(" + colnum + ")").remove();
        $(this).closest("table").find("tr").find("td:eq(" + colnum + ")").remove();
    });
    // A few jQuery helpers for exporting only
    jQuery.fn.pop = [].pop;
    jQuery.fn.shift = [].shift;

    $BTN.click(function () {
        var $rows = $TABLE.find('tr:not(:hidden)');
        var headers = [];
        var data = [];

        // Get the headers (add special header logic here)
        $($rows.shift()).find('th:not(:empty)').each(function () {
            headers.push($(this).text().toLowerCase());
        });

        // Turn all existing rows into a loopable array
        $rows.each(function () {
            var $td = $(this).find('td');
            var h = {};

            // Use the headers from earlier to name our hash keys
            headers.forEach(function (header, i) {
                h[header] = $td.eq(i).text();
            });

            data.push(h);
        });

        // Output the result
        $EXPORT.text(JSON.stringify(data));
    });

});

                                                </script>
                                                </html>