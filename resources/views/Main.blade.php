<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link href="./assets/css/bootstrap.css" rel="stylesheet"/>
<link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href="./assets/css/style-responsive.css" rel="stylesheet"/>
<link href="./assets/css/animate.min.css" rel="stylesheet" type="text/css"/>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="./assets/css/StyleSheet.css" type="text/css" rel="stylesheet"> </link>
        @yield('title')
        
    </head>

    <body class="master_style">

        @yield('action')
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <img id="Image1" src="./assets/img/banner.png" style="width:100%;"> </img>
            
            <div class="styleling" style="height: 450px">
                @yield('profile')
            </div>

            <img id="Image3" src="./assets/img/wave.jpg" style="width:100%;"> </img>
            <img id="Image2" src="./assets/img/cmubanner2.png" style="width:100%;"> </img>
        </form>	

    </body></html>