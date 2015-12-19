<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="shortcut icon" href="/favicon.ico" />
<link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href="../assets/css/style-responsive.css" rel="stylesheet"/>
<link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<script src="../assets/js/jquery-1.11.2.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap-select.js"></script>
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
         
            @include('master')
            <select name="term" onchange="this.form.submit();" >
                <option>select term</option>
            <option>Midterm</option>
             <option>Final</option>
            </select>
        
            @include('pages.subpages.student_file_midterm')
              <br />      
            

<img id="Image3" src="../assets/img/wave2.jpg" style="width:100%;"> </img>
            </div>
 <img id="Image2" src="../assets/img/cmubanner2.png" style="width:100%;"></img>
        </div>
                 </form>
    </body>
</html>