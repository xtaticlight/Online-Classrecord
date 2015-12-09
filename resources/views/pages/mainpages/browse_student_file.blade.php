<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="shortcut icon" href="http://www.must.edu.ph/wp-content/themes/must-theme/library/media/images/favicon.ico" />
<link href="../assets/css/bootstrap.css" rel="stylesheet"/>
<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href="../assets/css/style-responsive.css" rel="stylesheet"/>
<link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="../assets/css/StyleSheet.css" type="text/css" rel="stylesheet"> </link> 
    </head>
    <body class="master_style">
       <form method="post" action="../class/{{ $subject_id }}" id="form1" class="page_style">
           <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class="page_style">
             @include('pages.layout.topbar')
            <div class="styleling">
            <a href="pages/layout/topbar.blade.php"></a>
            <div  class="">
            @include('master')
            <select name="term" name="schoolYear" id="form1">
            <option>MIDTERM</option>
             <option>FINAL</option>
            </select>
            <button type="submit">ok</button>
            </div>
            
            
            @include('pages.subpages.student_file_midterm')
              <br />      </div>
            
            @include('pages.layout.footer')
        </div>
                 </form>
    </body>
</html>