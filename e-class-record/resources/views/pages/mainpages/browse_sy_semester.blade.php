<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="shortcut icon" href="/favicon.ico" />
<link href="./assets/css/bootstrap.min.css" rel="stylesheet"/>
<link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href="./assets/css/style-responsive.css" rel="stylesheet"/>
<link href="./assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<script src="./assets/js/jquery-1.11.2.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/bootstrap-select.js"></script>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="./assets/css/StyleSheet.css" type="text/css" rel="stylesheet"> </link> 
    </head>

    <body class="master_style">
        <div class="page_style">
            @include('pages.layout.topbar')
            <div class="styleling">
            <a href="pages/layout/topbar.blade.php"></a>
            @include('master')
            @include('pages.subpages.sy_semester')
            <br />
            <br />
             <br />
            </div>
            
            @include('pages.layout.footer')
        </div>
    </body>
</html>