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
        <link href="./assets/css/StyleSheet.css" type="text/css" rel="stylesheet"> </link> 
    </head>
    <TITLE>Class Record</TITLe>
    <body class="master_style">
        <div class="page_style">
            @include('pages.layout.topbar')
            <div class="styleling">

                <a href="pages/layout/topbar.blade.php"></a>

                <br/>
                <div class="form-group col-lg-4 col-md-4 col-xs-4" style="margin-left: -15px">
                    <p style="width: 60px;margin-left: 20px;" class="text-nowrap">Logged as</p>
                    <div style="margin-top: 20px" class="text-nowrap">
                        <br></br><a id="lbMain" href="http://www.must.edu.ph/">MUST Website</a> &gt; <a id="lbMain" style="color: Green" href="../home">HOME</a>
                    </div>
                </div>

                <div class="form-group col-lg-4 col-md-4 col-xs-4 col-lg-pull-3 col-md-pull-3 col-xs-pull-3">
                    <div class="container">
                        <div class="form-group col-lg-12 col-md-12 col-xs-12" style="margin-left: -25px">
                            <span style="color:Blue;font-family:Verdana;font-size:12pt;font-weight:bold;font-style:normal;">{{ Auth::user()->id }}</span>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-xs-12" style="margin-top: -15px;margin-bottom: -15px;margin-left: -25px">
                            <span class="color1">[employee]</span>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-xs-12" style="margin-left: -10px">
                        <a data-toggle = "modal" href = "#myModal2">Change Setup</a> | <a  href="{{url('/logout')}}"> Logout</a>

                    </div>
                </div>
                @include('pages.layout.build_info')
                <table width="100%">
                    <tbody>

                        <td valign="middle" style="text-align: center; vertical-align:middle; padding:3px">
                            <img  src="../assets/img/{{Auth::user()->id}}.jpg" style="height:70px;width:75px;margin-top: -4px">
                        </td>
                        <td valign="top" style="width: 100%">
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                        <td>
                                            
                                            <table  class = "table-responsive"width="100%">
                                                <tbody><tr>
                                                        <td style="width: 100px;" class="TableHeader">
                                                            <span>Employee No.</span></td>
                                                        <td class="TableHeader">
                                                            <span>Name</span></td>
                                                        <td style="width: 75px;" class="TableHeader">
                                                            <span>Gender</span></td>
                                                        <td class="TableHeader">
                                                            <span>Status</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 100px; height: 30px; text-align: center;">
                                                            <span style="font-size:Larger;font-weight:normal;">{{ Auth::user()->id }}</span></td>
                                                        <td style="text-align: center">
                                                            <span  style="font-size:Larger;font-weight:normal;">{{ Auth::user()->name }}</span></td>
                                                        <td style="width: 75px; text-align: center;">
                                                            <span style="font-size:Larger;font-weight:normal;">{{ Auth::user()->gender }}</span></td>
                                                        <td style="text-align: center">
                                                            <span  style="font-size:Larger;font-weight:normal;">{{ Auth::user()->status }}</span></td>
                                                    </tr>
                                                </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: gainsboro" valign="bottom">
                                            <table style="font-size: smaller; width: 100%; margin-left: 10px">
                                                <tbody><tr>
                                                        <td>
                                                            <span>Email : </span>
                                                            <span>{{ Auth::user()->email }}</span></td>
                                                        <td>
                                                            <span>Mobile No. :</span>
                                                            <span>{{ Auth::user()->contactNumber }}</span></td>
                                                    </tr>
                                                </tbody></table>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            </table>
                            <br />

                            <br />
                            <br />
                            @include('pages.subpages.menu_option')
                            <br />
                            <br />

                            </div>

                            @include('pages.layout.footer')
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal2" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header" style="padding:20px 15px;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4><span class="glyphicon glyphicon-wrench "></span> Settings</h4>
                                        </div>
                                       
                                        <div class = "modal-footer">
                                            <button data-dismiss="modal" class="btn btn-success btn-danger"><span class="glyphicon glyphicon-remove"></span>  Discard</button>
                                            <button type="submit" class="btn btn-success btn-success"><span class="glyphicon glyphicon-save"></span>  Save</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </body>
                            </html>