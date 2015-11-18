<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://utilities.must.edu.ph/MUST_SIS/home.aspx -->
<link href="./assets/css/bootstrap.css" rel="stylesheet"/>
<link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="./assets/css/style.css" rel="stylesheet"> </link>
<link href="./assets/css/style-responsive.css" rel="stylesheet"/>
<link href="./assets/css/animate.min.css" rel="stylesheet" type="text/css"/>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="./assets/css/StyleSheet.css" type="text/css" rel="stylesheet"> </link>

        <title>Home</title>
    </head>

    <body class="master_style">

        <form method="post" action="/e-class-record/public/signin" id="form1" class="page_style">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <img id="Image1" src="./assets/img/banner.png" style="width:100%;"> </img>

            <div class="styleling" style="height: 450px"
                 <div class="container animated fadeIn">

                    <div class="form-group col-lg-3 col-md-3 col-xs-3">
                        <br/>
                        <label>Username:</label>
                        <input type="text" tabindex="1" style="height: 22px; width: 120px" class="form-control" name="username" autofocus/>

                        <br></br><a id="lbMain" class="text-nowrap" href="http://www.must.edu.ph/">MUST Website</a> &gt; <span  style="color:#004000;">HOME</span>
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-xs-3 col-lg-pull-1 col-md-pull-1 col-xs-pull-1">
                        <br/>
                        <label>Password:</label>
                        <input type="password" tabindex="2" style="height: 22px; width: 120px" class="form-control" name="password">
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-xs-3 col-lg-pull-2 col-md-pull-2 col-xs-pull-2" style="margin-top: 20px">
                        <br/>
                        <input class="btn-theme btn-block" tabindex="3" style="height: 22px; width: 50px" type="submit" value="Login"/>
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-xs-3 col-lg-pull-1 col-md-pull-1 col-xs-pull-1">
                        <span id="lblVersion" style="color:#004000;">Build 2012.06.13</span>
                        <span id="Label2" class="color1" style="font-family:Bodoni MT;font-size:38pt;">ESOnline</span><br>
                            <span id="Label3" style="color:#004000;" class="text-nowrap">Online Class Record Encoding</span>
                    </div>

                </div>

            </div>

            <img id="Image3" src="./assets/img/wave.jpg" style="width:100%;"> </img>
            <img id="Image2" src="./assets/img/cmubanner2.png" style="width:100%;"> </img>
        </form>	

    </body></html>