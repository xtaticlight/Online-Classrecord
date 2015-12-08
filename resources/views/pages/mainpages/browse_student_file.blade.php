<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="shortcut icon" href="http://www.must.edu.ph/wp-content/themes/must-theme/library/media/images/favicon.ico" />
<link href="/e-class-record/public/assets/css/bootstrap.css" rel="stylesheet"/>
<link href="/e-class-record/public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href="/e-class-record/public/assets/css/style-responsive.css" rel="stylesheet"/>
<link href="/e-class-record/public/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="/e-class-record/public/assets/css/StyleSheet.css" type="text/css" rel="stylesheet"> </link> 
    </head>
    <body class="master_style">
        <div class="page_style">
             @include('pages.layout.topbar')
            <div class="styleling">
            <a href="pages/layout/topbar.blade.php"></a>
            @include('master')
            @include('pages.subpages.student_file')
              <br />
            <br />
            </div>
            
            @include('pages.layout.footer')
        </div>
    </body>
</html>